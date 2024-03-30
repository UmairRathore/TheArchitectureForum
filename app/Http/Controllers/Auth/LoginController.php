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

        if (Auth::guard('user')->check() && auth('user')->user()->role == 'admin') /* admin */ {
            return redirect('/dashboard');
        } elseif (Auth::guard('user')->check() && auth('user')->user()->role == 'user') /* user */ {
            return redirect('/');;
        }

//        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
dd($credentials);
        if (Auth::guard('user')->attempt($credentials, true)) {
            $user = auth('user')->user();

            if ($user->role == 'admin') {
                return redirect('/dashboard');
            }
            if ($user->role == 'user') {
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
