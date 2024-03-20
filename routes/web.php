<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Auth\RegisterationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Frontend\HomeController;
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

//BACKEND
Route::get('/dashboard',[DashboardController::class, 'index'])->name('home');



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







//Frontend

//    Frontend MAIN
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/404',[HomeController::class, 'notFound'])->name('notFound');
Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
Route::get('/blog-details',[HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/coming-soon',[HomeController::class, 'comingSoon'])->name('coming.soon');
Route::get('/contact-us',[HomeController::class, 'contactUs'])->name('contact.us');
Route::get('/privacy-policy',[HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-conditions',[HomeController::class, 'termsConditions'])->name('terms.conditions');
//
////      Answers.
Route::get('/best-answered',[HomeController::class, 'bestAnswered'])->name('best.answered');
Route::get('/most-answered',[HomeController::class, 'mostAnswered'])->name('most.answered');
Route::get('/most-detail-answered',[HomeController::class, 'mostDetailAnswered'])->name('most.detail.answered');
Route::get('/most-visited-answered',[HomeController::class, 'mostVisitedAnswered'])->name('most.visited.answered');
Route::get('/unanswered',[HomeController::class, 'unanswered'])->name('unanswered');



////      Questions.
Route::get('/questions',[HomeController::class, 'questions'])->name('questions');
Route::get('/ask-questions',[HomeController::class, 'askQuestions'])->name('ask.questions');

Route::get('/all-questions',[HomeController::class, 'allQuestions'])->name('all.questions');



Route::get('/user',[HomeController::class, 'user'])->name('user');
Route::get('/user-profile',[HomeController::class, 'userProfile'])->name('user.profile');
Route::get('/user-edit-profile',[HomeController::class, 'userEditProfile'])->name('user.edit.profile');
Route::get('/user-groups',[HomeController::class, 'userGroups'])->name('user.groups');


Route::get('/activity',[HomeController::class, 'activity'])->name('activity');
Route::get('/badges',[HomeController::class, 'badges'])->name('badges');
Route::get('/referral',[HomeController::class, 'referral'])->name('referral');
Route::get('/tags',[HomeController::class, 'tags'])->name('tags');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');
Route::get('/groups',[HomeController::class, 'groups'])->name('groups');



Route::get('/technology',[HomeController::class, 'technology'])->name('technology');
Route::get('/polls',[HomeController::class, 'polls'])->name('polls');
Route::get('/communities',[HomeController::class, 'communities'])->name('communities');
Route::get('/education',[HomeController::class, 'education'])->name('education');











