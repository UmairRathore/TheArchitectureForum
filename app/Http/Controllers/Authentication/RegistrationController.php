<?php

namespace App\Http\Controllers\Authentication;

use Faker\Factory as Faker;


use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Coupon;
use App\Models\Package;
use App\Models\User;
use App\Models\UserMemorial;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    //

    protected $_viewPath;
    protected $data = array();

    public function __construct()
    {
        $this->_model = new User();

        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'auth.';
        $this->data['moduleName'] = 'User';
    }



    public function register()
    {
        https://www.mykeeper.com/signup-steps/?is_self_account_view=1
        return view($this->_viewPath . 'signup-user');
    }



    public function postregisteration(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $this->data['user'] = $this->_model;
        $this->data['user']->fname = $request->input('fname');
        $this->data['user']->lname = $request->input('fname').' '.$request->input('lname');
        $this->data['user']->name = $request->input('lname');
        $this->data['user']->email = $request->input('email');
        $this->data['user']->password = Hash::make($request->password);
        $this->data['user']->role = '2'; /* self User Account */

        $check = $this->data['user']->save();

        if ($check) {
////            dd($check);
//            $token = Str::random(64);
//$email = $request->email;
//            DB::table('email_verifies')->insert([
//                'email' => $email,
//                'token' => $token,
//                'created_at' => Carbon::now()
//            ]);
//            Mail::send('auth.email.verifyEmail', ['email'=>$email,'token' => $token], function ($message) use ($request) {
//                $message->to($request->email);
//                $message->subject('Verify Email');
//            });
//            session()->flash('message', 'We have e-mailed your Signup Verification link!');

//            return back();
            return redirect()->route('home');;

        }
        else
        {
            session()->flash('message', 'Failed to register');

            return back();
        }

    }


    public function verify(Request $request, $email,$token)
    {

        $isValidToken =  // Your token verification logic here;
        DB::table('email_verifies')->where('email', $email)
            ->where('token',$token)->exists();

    if ($isValidToken) {
        $msg = 'Registration successful. Please log in.';
    } else {
        $msg = 'Error occurred while registering.';
    }

        // Flash the message and message type to the session
        $request->session()->flash('message', $msg);

        // Redirect the user to the login page
        return redirect()->route('login');

    }
}
