<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Authentication\VerificationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'registered')->name('register.post');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->name('login.post');
});

Route::get('dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth', 'is_verify_email');
Route::get('account/verify/email/{token}/verified', [VerificationController::class, 'verifyAccount'])->name('verify.user');
Route::get('account/verify/email/resend', [VerificationController::class, 'index'])->name('verify.index');
Route::post('account/verify/email/resend', [VerificationController::class, 'resendAccount'])->name('verify.resend');

//Route::post('account/verify/email/{token}', function (Request $request) {
//    $request->user->sendEmailVerificationNotification();
//    return back()->with('message', 'Verification link sent!');
//})->name('verification.send');
