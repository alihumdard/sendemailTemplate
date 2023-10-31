<?php

namespace App\Extensions;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Mail\MailManager;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

require 'vendor/autoload.php';


class PhpMailerSend extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    // smtp configuration ...
    protected $mail_username = '';
    protected $mail_host = '';
    protected $mail_port = '';
    protected $mail_encryption = '';
    protected $mail_password = '';

    // mail configuration ...
    protected $mail_to = '';
    protected $reply_to = '';
    protected $email_subject = '';
    protected $email_body = '';
    protected $cc_email = '';
    protected $attachment = '';

    public function __construct($data)
    {

        // smtp configuration
        $this->mail_host       = $data['mail_host'] ?? NULL;
        $this->mail_port       = $data['mail_port'] ?? NULL;
        $this->mail_username   = $data['mail_username'] ?? NULL;
        $this->mail_password   = $data['mail_password'] ?? NULL;
        $this->mail_encryption = $data['mail_encryption'] ?? NULL;

        // mail configuration ...
        $this->mail_to       = $data['mail_to'] ?? NULL;
        $this->reply_to      = $data['reply_to']  ?? NULL;
        $this->attachment    = $data['attachment']  ?? NULL;
        $this->email_subject = $data['email_subject']  ?? NULL;
        $this->email_body    = $data['email_body']  ?? NULL;
        $this->cc_email      = $data['cc_email']  ?? NULL;
    }

    public function send_bulkMail()
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();

            $mail->Host       = $this->mail_host;
            $mail->Port       = $this->mail_port;
            $mail->SMTPAuth   = true;
            $mail->Username   = $this->mail_username;
            $mail->Password   = $this->mail_password;
            $mail->SMTPSecure = $this->mail_encryption;

            // Recipients
            $mail->setFrom($this->mail_username);
            $mail->addAddress($this->mail_to);
            $mail->addReplyTo($this->reply_to);
            $mail->addCC($this->cc_email);

            // attachements ...
            if ($this->attachment) {
                $mail->addAttachment($this->attachment->getRealPath(), $this->attachment->getClientOriginalName());
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = $this->email_subject;
            $mail->Body    = $this->email_body;

            if ($mail->send()) {
                http_response_code(200);
                return 'sent';
            } else {
                http_response_code(500);
                return 'fail';
            }
        } catch (Exception $e) {
            http_response_code(500);
            return "Email sending failed. Error: {$mail->ErrorInfo}";
        }
    }
}
