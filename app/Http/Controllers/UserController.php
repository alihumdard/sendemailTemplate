<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Email;
use App\Models\Template;
use App\Extensions\PhpMailerSend;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    protected $template_types;
    public function __construct()
    {
        $this->template_types = config('constants.TEMPLATE_TYPES');
    }

    public function templates($id = NULL)
    {
        if (auth()->user()->role === 'Admin') {

            if ($id) {
                $data['template'] = Template::find($id);
            }
            $data['user'] = User::where(['role' => 'User', 'status' => 'Active'])->get()->toArray();
            $data['templates'] = Template::with('user:id,name')->where(['status' => 'Active'])->get()->toArray();
            $data['templates_types'] = $this->template_types;
            return view('template', $data);
        } else {
            return redirect()->back();
        }
    }

    public function emails($id = NULL)
    {
        $user = auth()->user();
        $data['user'] = $user;
        $data['emails'] = Email::where(['user_id' => $user->id, 'status' => 'Active'])->get()->toArray();
        return view('emails', $data);
    }

    public function dashboard(Request $request, $id = NULL)
    {
        $user = auth()->user();
        $data['user'] = $user;
        $data['templates'] = Template::where(['user_id' => $user->id, 'status' => 'Active'])->get()->toArray();
        return view('dashboard', $data);
    }

    public function duplicate_template(Request $request)
    {
        $user = auth()->user();
        $email = Email::where(['id' => $request->id, 'status' => 'Active'])->first();
        $user->email_body    = $email->email_body;
        $user->cc_email      = $email->cc_email;
        $user->email_subject = $email->email_subject;
        $user->reply_email   = $email->reply_email;

        $data['user'] = $user;
        $data['email'] = $email;
        $data['templates'] = Template::where(['user_id' => $user->id, 'status' => 'Active'])->get()->toArray();
        return view('dashboard', $data);
    }
    public function users(Request $request)
    {
        if (auth()->user()->role === 'Admin') {
            $data['user'] = User::where(['role' => 'User'])->get()->toArray();
            return view('users', $data);
        } else {
            return redirect()->back();
        }
    }

    public function deleteUser($id)
    {
        if (auth()->user()->role === 'Admin') {
            $user = User::find($id);
            if ($user) {
                $user->delete();
                return redirect('/users');
            }
        } else {
            return redirect()->back();
        }
    }

    public function sendEmail(Request $request)
    {
        $user = auth()->user();

        // $request->validate([
        //     'client_name' => 'required',
        //     'client_email' => 'required|email',
        //     'email_subject' => 'required',
        //     'email_body' => 'required',
        //     'reply_to' => 'required',
        //     'document' => 'file|mimes:pdf,doc,docx',
        // ]);

        try {

            // mail configuration ...
            $data = [
                'client_name'    =>  $request->client_name,
                'mail_to'        =>  $request->client_email,
                'email_subject'  =>  $request->email_subject,
                'email_body'     =>  view('emails.email_body')->with('email_body', $request->email_body)->render(),
                'reply_to'       =>  $request->reply_email,
                'cc_email'       =>  $request->cc_email,
            ];

            if ($request->id) {
                $data['document'] =  $request->document;
            } else {
                $data['attachment'] =  $request->file('document');
            }
            // SMTP configuration
            $data += [
                'mail_host'       => $user->mail_host,
                'mail_port'       => $user->mail_port,
                'mail_username'   => $user->mail_username,
                'mail_password'   => $user->mail_password,
                'mail_encryption' => $user->mail_encryption,
            ];

            $phpmailer = new PhpMailerSend($data);
            $status = $phpmailer->send_bulkMail();

            if ($status == 'sent') {
                $emailExist = Email::find($request->id);
                if ($emailExist) {
                    $emailExist->update([
                        'status' => 'Again Send',
                        'updated_by' => $user->id,
                    ]);
                } else {

                    $attachmentPath = $request->file('document')->store('email_template');
                    if ($document = $request->file('document')) {
                        $destinationPath = 'email_template';
                        $document_name = Str::random(15) . date('YmdHis') . "." . $document->getClientOriginalExtension();
                        if (!Storage::exists($destinationPath)) {
                            Storage::makeDirectory($destinationPath);
                        }
                        $document->move($destinationPath, $document_name);
                        $attachmentPath = $destinationPath . '/' . $document_name;
                    }

                    Email::create([
                        'client_name'    => $request->client_name,
                        'client_email'   => $request->client_email,
                        'email_subject'  => $request->email_subject,
                        'email_body'     => base64_encode($request->email_body),
                        'reply_email'    => $request->reply_email,
                        'cc_email'       => $request->cc_email,
                        'document'       => $attachmentPath,
                        'user_id'        => $user->id,
                        'created_by'     => $user->id,
                    ]);
                }

                session()->flash('type', 'success');
                session()->flash('status', 'Mail Sent');
                session()->flash('message', 'Email sent successfully.');

                return redirect()->back();
            } else {
                session()->flash('type', 'warning');
                session()->flash('status', "Opps! Error");
                session()->flash('message', "Opp's! Email can't sent.");
                return redirect()->back();
            }
        } catch (\Exception $e) {
            echo "Email could not be sent. Error: " . $e->getMessage();
        }
    }
}
