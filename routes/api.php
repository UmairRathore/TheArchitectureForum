<?php

use App\Http\Controllers\Auth\RegisterationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//AUTHENTICATION

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgotpassword', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forgetpassword');
Route::post('/forgotpassword', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('submitforgetpassword');
Route::get('/resetpassword/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('resetpassword');
Route::post('/resetpassword', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('submitresetpassword');


Route::get('/usersignup', [RegisterationController::class, 'userSignup'])->name('usersignup');
Route::post('/userregistration', [RegisterationController::class, 'userregistration'])->name('userregistration');


Route::get('/email/verify/{email}/{token}', [RegisterationController::class, 'verify'])->name('verification.verify');

