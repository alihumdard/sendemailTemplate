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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'mail_username' => ['required', 'string', 'email', 'max:255',],
            'mail_host' => ['required', 'string', 'max:255'],
            'mail_port' => ['required', 'numeric'],
            'mail_password' => ['required'],
            'mail_encryption' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mail_username' => $request->mail_username,
            'mail_host' => $request->mail_host,
            'mail_port' => $request->mail_port,
            'mail_password' => $request->mail_password,
            'mail_encryption' => $request->mail_encryption,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/users');
    }
}
