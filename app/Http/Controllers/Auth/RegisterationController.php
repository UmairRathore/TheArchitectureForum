<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterationController extends Controller
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

    public function signup()
    {
        return view($this->_viewPath . 'signup');
    }

    public function userregistration(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $name = $request->input('fname').' '. $request->input('lname');


        $this->data['user'] = $this->_model;
        $this->data['user']->name = $name;
        $this->data['user']->lname = $request->input('fname');
        $this->data['user']->fname = $request->input('lname');
        $this->data['user']->email = $request->input('email');
        $this->data['user']->password = Hash::make($request->password);
        $this->data['user']->role = 'user';

        $check = $this->data['user']->save();
        if ($check) {
            session()->flash('message', 'Registeration complete Login to Continue');

            return redirect()->route('login');
        }
        else
        {
            session()->flash('message', 'Failed to register');

            return redirect()->back();
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
