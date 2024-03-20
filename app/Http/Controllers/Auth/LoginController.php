<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function logout()
    {
        $check = Auth::guard('user')->logout();
        if ($check == null) {
//            return redirect('login');
            return redirect('/');
        }

    }

    //Login Page
    function Login()
    {

        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 1) /* admin */ {
            return redirect('/dashboard');
        } elseif (Auth::guard('user')->check() && auth('user')->user()->role_id == 2) /* user */ {
            return redirect('/');;
        }
        return response('sad');

//        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('user')->attempt($credentials, true)) {
            $user = auth('user')->user();

            if ($user->role_id == 1) {
                return redirect('/dashboard');
            }
            if ($user->role_id == 2) {
                $isEmailVerified = User::where('email_verified_at','=',Null)->exists();
                if (!$isEmailVerified) {
                    Auth::guard('user')->logout();
                    return redirect()->back()->with('message', 'Your email is not verified.');
                }

            }

        }
        $msg = "Your credentials do not match our records. Please try again.";
        Session::flash('message', $msg);
        return redirect()->back();
    }
}
