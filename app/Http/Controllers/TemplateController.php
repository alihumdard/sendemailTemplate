<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'numeric'],
            'file_type' => ['required', 'string', 'max:255',],
            'url' => ['required', 'string'],
        ]);

        $templateData = [
            'name' => $request->name,
            'user_id' => $request->user_id,
            'file_type' => $request->file_type,
            'template_type' => $request->template_type ?? 'Default',
            'created_by' => auth()->user()->id,
            'url' => $request->url,
        ];
        if (auth()->user()->role === 'Admin') {
            Template::updateOrcreate(['id' => $request->id], $templateData);
            return redirect('/templates');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->role === 'Admin') {
            $template = Template::find($id);
            if ($template) {
                $template->status = 'Deactive';
                $template->save();
                return redirect('/templates');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
