<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Validation\Rule;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($id = NULL)
    {
        $user = NULL;
        if ($id) {
            $user = User::find($id);
        }
        return view('auth.register', ['user' => $user]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($request->id)],
            'mail_username' => ['required', 'string', 'email', 'max:255',],
            'mail_host' => ['required', 'string', 'max:255'],
            'mail_port' => ['required', 'numeric'],
            'mail_password' => ['required'],
            'mail_encryption' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'mail_username' => $request->mail_username,
            'mail_host' => $request->mail_host,
            'mail_port' => $request->mail_port,
            'mail_password' => $request->mail_password,
            'mail_encryption' => $request->mail_encryption,
            'password' => Hash::make($request->password),
        ];

        User::updateOrcreate(['id' => $request->id], $userData);

        return redirect('/users');
    }
}
