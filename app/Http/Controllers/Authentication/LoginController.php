<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\EmailVerify;
use App\Models\UserMemorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

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

        if (Auth::guard('user')->check() && auth('user')->user()->role == 1) /* admin */ {
            return redirect('/dashboard');
        } elseif (Auth::guard('user')->check() && auth('user')->user()->role == 2) /* user */ {
            return redirect()->route('edit.user.profile', ['id' => \auth()->user()->id]);
        }

        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
//dd($credentials);
        if (Auth::guard('user')->attempt($credentials, true)) {
            $user = auth('user')->user();
//            dd($user);

            if ($user->role == 1) {
                return view('backend.index');
            }
            if ($user->role == 2) {
                // Check if email is verified
//                $isEmailVerified = EmailVerify::where('email', $user->email)->exists();
//                if (!$isEmailVerified) {
//                    // If email is not verified, logout the user and redirect back
//                    Auth::guard('user')->logout();
//                    return redirect()->back()->with('message', 'Your email is not verified.');
//                }
                    return redirect()->route('home');

            }

        }
        // If authentication fails
        $msg = "Your credentials do not match our records. Please try again.";
        Session::flash('message', $msg);
        return redirect()->back();
    }
}
