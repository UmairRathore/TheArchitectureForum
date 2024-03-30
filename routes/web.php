<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BadgeController;
use App\Http\Controllers\Admin\ContentPolicyController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserAgreementController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Authentication\RegistrationController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\ForgetPasswordController;
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



//AUTHENTICATION

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgotpassword', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forgetpassword');
Route::post('/forgotpassword', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('submitforgetpassword');
Route::get('/resetpassword/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('resetpassword');
Route::post('/resetpassword', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('submitresetpassword');


Route::get('/register', [RegistrationController::class, 'register'])->name('register');
Route::post('/postregisteration', [RegistrationController::class, 'postregisteration'])->name('registeration');


Route::get('/email/verify/{email}/{token}', [RegistrationController::class, 'verify'])->name('verification.verify');



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




Route::get('/activity',[HomeController::class, 'activity'])->name('activity');
Route::get('/badge',[HomeController::class, 'badges'])->name('badge');
Route::get('/referral',[HomeController::class, 'referral'])->name('referral');
Route::get('/tags',[HomeController::class, 'tags'])->name('tags');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');
Route::get('/groups',[HomeController::class, 'groups'])->name('groups');



Route::get('/technology',[HomeController::class, 'technology'])->name('technology');
Route::get('/polls',[HomeController::class, 'polls'])->name('polls');
Route::get('/communities',[HomeController::class, 'communities'])->name('communities');
Route::get('/education',[HomeController::class, 'education'])->name('education');





Route::group(['middleware' => 'auth'], function () {



        Route::get('/user', [\App\Http\Controllers\Frontend\UserController::class, 'user'])->name('user');
        Route::get('/user-profile/{id}', [\App\Http\Controllers\Frontend\UserController::class, 'userProfile'])->name('user.profile');
        Route::get('/user-edit-profile', [\App\Http\Controllers\Frontend\UserController::class, 'userEditProfile'])->name('user.edit.profile');
        Route::post('/user-update-password', [\App\Http\Controllers\Frontend\UserController::class, 'userUpdatePassword'])->name('user.update.password');
        Route::post('/user-update-profile', [\App\Http\Controllers\Frontend\UserController::class, 'userUpdateProfile'])->name('user.update.profile');
        Route::post('/user-delete-profile', [\App\Http\Controllers\Frontend\UserController::class, 'userDeleteProfile'])->name('user.delete.profile');
//Route::get('/user-groups',[\App\Http\Controllers\Frontend\UserController::class, 'userGroups'])->name('user.groups');


//   Dashboard Admin
    Route::group(['prefix' => 'admin'], function () {
//DASHBOARD
        Route::get('/dashboard', [UserController::class, 'index'])->name('backend.index');


        Route::get('/edit-admin/{id}', [UserController::class, 'editAdmin'])->name('backend.edit-admin');
        Route::post('/update-admin/{id}', [UserController::class, 'updateAdmin'])->name('backend.update-admin');


        //<----------CRUD User
        Route::group(['prefix' => 'user'], function () {

            Route::get('/list-user', [UserController::class, 'index'])->name('backend.list-user');
            Route::get('/add-user', [UserController::class, 'create']);
            Route::post('/add-user', [UserController::class, 'store'])->name('backend.add-user');
            Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('backend.edit-user');
            Route::put('/update-user/{id}', [UserController::class, 'update'])->name('backend.update-user');
            Route::get('/delete-user/{id}', [UserController::class, 'delete'])->name('backend.delete-user');
            Route::post('/status-user/{id}', [UserController::class, 'changeStatus'])->name('status-user');

        });
        //User

        //<----------CRUD topic
        Route::group(['prefix' => 'topic'], function () {

            Route::get('/list-topic', [TopicController::class, 'index'])->name('backend.topics-list');
            Route::get('/add-topic', [TopicController::class, 'create']);
            Route::post('/add-topic', [TopicController::class, 'store'])->name('backend.add-topics');
            Route::get('/edit-topic/{id}', [TopicController::class, 'edit'])->name('backend.edit-topics');
            Route::put('/update-topic/{id}', [TopicController::class, 'update'])->name('backend.update-topics');
            Route::get('/delete-topic/{id}', [TopicController::class, 'delete'])->name('backend.delete-topics');

        });
        //topic


        //<----------CRUD Faq
        Route::group(['prefix' => 'faq'], function () {

            Route::get('/list-faq', [FaqController::class, 'index'])->name('backend.faq-list');
            Route::get('/add-faq', [FaqController::class, 'create'])->name('backend.add-faq');
            Route::post('/store-faq', [FaqController::class, 'store'])->name('backend.add-faq');
            Route::get('/edit-faq/{id}', [FaqController::class, 'edit'])->name('backend.edit-faq');
            Route::put('/update-faq/{id}', [FaqController::class, 'update'])->name('backend.update-faq');
            Route::get('/delete-faq/{id}', [FaqController::class, 'delete'])->name('backend.delete-faq');
        });
        //Faq

        //<----------CRUD Aboutus
        Route::group(['prefix' => 'aboutus'], function () {
            Route::get('/list-aboutus', [AboutusController::class, 'index'])->name('backend.aboutus-list');
            Route::get('/add-aboutus', [AboutusController::class, 'create'])->name('backend.add-aboutus');
            Route::post('/store-aboutus', [AboutusController::class, 'store'])->name('backend.add-aboutus');
            Route::get('/edit-aboutus/{id}', [AboutusController::class, 'edit'])->name('backend.edit-aboutus');
            Route::put('/update-aboutus/{id}', [AboutusController::class, 'update'])->name('backend.update-aboutus');
            Route::get('/delete-aboutus/{id}', [AboutusController::class, 'delete'])->name('backend.delete-aboutus');
        });
        //Aboutus


        //<----------CRUD badge
        Route::group(['prefix' => 'badge'], function () {

            Route::get('/list-badge', [BadgeController::class, 'index'])->name('backend.badge-list');
            Route::get('/add-badge', [BadgeController::class, 'create']);
            Route::post('/add-badge', [BadgeController::class, 'store'])->name('backend.add-badge');
            Route::get('/edit-badge/{id}', [BadgeController::class, 'edit'])->name('backend.edit-badge');
            Route::put('/add-update/{id}', [BadgeController::class, 'update'])->name('backend.update-badge');
            Route::get('/delete-badge/{id}', [BadgeController::class, 'delete'])->name('backend.delete-badge');

        });
        //badge


        //<----------CRUD content-policy
        Route::group(['prefix' => 'content-policy'], function () {

            Route::get('/list-content-policy', [ContentPolicyController::class, 'index'])->name('backend.content-policy-list');
            Route::get('/add-content-policy', [ContentPolicyController::class, 'create'])->name('backend.add-content-policy');
            Route::post('/store-content-policy', [ContentPolicyController::class, 'store'])->name('backend.add-content-policy');
            Route::get('/edit-content-policy/{id}', [ContentPolicyController::class, 'edit'])->name('backend.edit-content-policy');
            Route::put('/update-content-policy/{id}', [ContentPolicyController::class, 'update'])->name('backend.update-content-policy');
            Route::get('/delete-content-policy/{id}', [ContentPolicyController::class, 'delete'])->name('backend.delete-content-policy');

        });
        //content-policy

        //<----------CRUD privacy_policy
        Route::group(['prefix' => 'privacy-policy'], function () {

            Route::get('/list-privacy-policy', [PrivacyPolicyController::class, 'index'])->name('backend.privacy-policy-list');
            Route::get('/add-privacy-policy', [PrivacyPolicyController::class, 'create'])->name('backend.add-privacy-policy');
            Route::post('/store-privacy-policy', [PrivacyPolicyController::class, 'store'])->name('backend.add-privacy-policy');
            Route::get('/edit-privacy-policy/{id}', [PrivacyPolicyController::class, 'edit'])->name('backend.edit-privacy-policy');
            Route::put('/update-privacy-policy/{id}', [PrivacyPolicyController::class, 'update'])->name('backend.update-privacy-policy');
            Route::get('/delete-privacy-policy/{id}', [PrivacyPolicyController::class, 'delete'])->name('backend.delete-privacy-policy');

        });
        //privacy_policy

        //<----------CRUD tag
        Route::group(['prefix' => 'tag'], function () {
            Route::get('/tag', [TagController::class, 'index'])->name('backend.tags-list');
            Route::get('/tag/create', [TagController::class, 'create'])->name('backend.add-tags');
            Route::post('/tag', [TagController::class, 'store'])->name('backend.add-tags');
            Route::get('/tag/{id}/edit', [TagController::class, 'edit'])->name('backend.edit-tags');
            Route::put('/tag/{id}', [TagController::class, 'update'])->name('backend.update-tags');
            Route::get('/tag/{id}', [TagController::class, 'delete'])->name('backend.delete-tags');
        });
        //tag

        //<----------CRUD User-Agreement
        Route::group(['prefix' => 'user-agreement'], function () {

            Route::get('/list-user-agreement', [PrivacyPolicyController::class, 'index'])->name('backend.user-agreement-list');
            Route::get('/add-user-agreement', [PrivacyPolicyController::class, 'create'])->name('backend.add-user-agreement');
            Route::post('/store-user-agreement', [PrivacyPolicyController::class, 'store'])->name('backend.add-user-agreement');
            Route::get('/edit-user-agreement/{id}', [PrivacyPolicyController::class, 'edit'])->name('backend.edit-user-agreement');
            Route::put('/update-user-agreement/{id}', [PrivacyPolicyController::class, 'update'])->name('backend.update-user-agreement');
            Route::get('/delete-user-agreement/{id}', [PrivacyPolicyController::class, 'delete'])->name('backend.delete-user-agreement');
        });
        //User-Agreement


    });
//   Dashboard Admin




});







