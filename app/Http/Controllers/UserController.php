<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function templates(Request $request)
    {
        return view('template');
    }

    public function dashboard(Request $request)
    {
        return view('dashboard');
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
}
