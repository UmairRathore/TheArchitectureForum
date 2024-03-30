<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Badge;
use App\Models\User;
use App\Models\UserBadge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //


    public function user ( )
    {
        $users = User::withCount('questions as questionsCount')->paginate(10);
        return view ('frontend.user.user',compact('users',$users));
    }


    public function userProfile($id)
    {
        $User = [];
        if ($id == auth()->user()->id) {
            $user =
                User::withCount(['questions','answers'])
//                withCount(['questions as questionsTags' => function ($query) {
//                    $query->distinct('tag_id')->count('tag_id');
//                }, 'questions as questionsTopics' => function ($query) {
//                    $query->distinct('topic_id')->count('topic_id');
//                }, 'questions as questionsAnswers'])
                    ->where('users.id', auth()->user()->id)
                    ->first(); // Use first() to get a single user, assuming user ID is unique
            $badges = UserBadge::where('user_id', auth()->user()->id)->get();

        $User = [
                'user' => $user,
                'badges' => $badges,
            ];
        } else {
            $user = User::withCount(['questions','answers'])
//                User::withCount(['questions as questionsTags' => function ($query) {
//                    $query->distinct('tag_id')->count('tag_id');
//                }, 'questions as questionsTopics' => function ($query) {
//                    $query->distinct('topic_id')->count('topic_id');
//                }, 'questions as questionsAnswers'])
                    ->where('users.id', $id)
                    ->first(); // Use first() to get a single user, assuming user ID is unique
            $badges = UserBadge::where('user_id', $id)->get();

            $User = [
                'user' => $user,
                'badges' => $badges,
            ];
        }
        return view('frontend.user.user-profile', compact('User',$User));
    }



    public function userPortfolio ( )
    {
        $pdfURl = User::select('users.portfolio')
            ->where('id',auth()->user()->id)->first();
        return view ('frontend.user.user-portfolio',$pdfURl);
    }



    public function userEditProfile()
    {
        $user = User::find(auth()->user()->id);
        return view ('frontend.user.user-edit-profile',compact('user',$user));
    }

    public function userupdateProfile(Request $request)
    {


        $user = User::find($request->user()->id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }
        $user->name = $request->fname.' '.$request->lname;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->twitter_url = $request->twitter_url;
        $user->facebook_url = $request->facebook_url;
        $user->about_me = $request->about_me;
        $user->location = $request->location;
        if ($request->hasFile('profile_image'))
        {
            $folderName = 'profile_image';
            $image = $request->file('profile_image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = public_path('assets/images/' . $folderName . '/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $user->profile_image = $image->move($directory, $imageName);

        }
        $check = $user->save();
        if ($check) {
            return response()->json(['status' => 'success', 'message' => 'User Profile updated successfully'], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Failed to update user profile'], 400);
        }
    }

    public function userUpdatePortfolio(Request $request)
    {
        $user = User::find($request->user()->id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }
        dd($request->file('user_portfolio'));
        if ($request->hasFile('user_portfolio'))
        {
            $folderName = 'user_portfolio';
            $image = $request->file('user_portfolio');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = public_path('assets/images/' . $folderName . '/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $user->portfolio = $image->move($directory, $imageName);

        }
        dd($user);
        $check = $user->save();
        if ($check) {
            return response()->json(['status' => 'success', 'message' => 'User Profile updated successfully','data'=>$user->portfolio], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Failed to update user profile'], 400);
        }
    }

    public function userupdatePassword(Request $request)
    {
//        $request->validate([
//            'password' => 'required|confirmed'
//        ], [
//
//            'password.confirmed' => 'The password confirmation does not match.'
//        ]);

        $user = User::find($request->user()->id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }
        $user->password = Hash::make($request->password);
        $check = $user->save();
        if ($check) {
            return response()->json(['status' => 'success', 'message' => 'User password updated successfully'], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Failed to update user password'], 400);
        }
    }

    public function userDeleteProfile(Request $request)
    {

        $user = User::find($request->user()->id);
        if (!$user) {
            return redirect()->back()->with(['status' => 'error', 'message' => 'User not found'], 404);
        }

        $checklogout = Auth::guard('user')->logout();
        $check = $user->delete();

        if ($check) {
            return redirect()->route('home')->with(['status' => 'success', 'message' => 'User deleted successfully']);
        } else {
            return redirect()->back()->with(['status' => 'error', 'message' => 'Failed to delete user']);
        }
    }


}
