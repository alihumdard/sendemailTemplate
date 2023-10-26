<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
})->middleware(['auth', 'verified'])->name('template');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/template', function (Request $request) {
    $request->validate([
        'client_name' => 'required',
        'client_email' => 'required|email',
        'email_subject' => 'required',
        'email_body' => 'required',
        'file_attachments.*' => 'file|mimes:pdf,doc,docx',
    ]);

    $data = [
        'client_name' => $request->client_name,
        'email_subject' => $request->email_subject,
        'email_body' => $request->email_body,
        'document' => $request->file('document'),
    ];


    Mail::to($request->client_email)
        ->send(new SendEmail($data));

    return redirect()->back()->with('success', 'Email sent successfully.');
})->middleware(['auth', 'verified'])->name('template');

require __DIR__ . '/auth.php';
