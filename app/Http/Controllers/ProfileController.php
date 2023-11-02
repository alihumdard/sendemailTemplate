<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function mailsetting(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'reply_email'   => ['email'],
            'cc_email'      => ['email'],
            'email_subject' => ['string'],
            'email_body'    => ['string'],
        ]);

        $request->user()->update([
            'reply_email'   => $request->reply_email,
            'cc_email'      => $request->cc_email,
            'email_subject' => $request->email_subject,
            'email_body'    => base64_encode($request->email_body),
        ]);

        return Redirect::route('profile.mailsetting')->with('status', 'profile-updated');
    }
}
