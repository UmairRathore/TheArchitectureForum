<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Badge;
use App\Models\User;
use App\Models\UserBadge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



    public function userGroups ( )
    {
        return view ('frontend.user.user-groups');
    }



    public function userEditProfile()
    {
        $user = User::find(auth()->user()->id);
        return view ('frontend.user.user-edit-profile',compact('user',$user));
    }

    public function userupdateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'about_me' => 'nullable|string|max:500',
            'twitter_link' => 'nullable|url|max:255',
            'facebook_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
        ], [

            'profile_image.image' => 'The profile image must be an image file.',
            'profile_image.mimes' => 'The profile image must be a file of type: jpeg, png, jpg, gif.',
            'profile_image.max' => 'The profile image may not be greater than 2MB in size.',
            'about_me.max' => 'The About Me field may not be greater than 500 characters.',
            'twitter_link.url' => 'The Twitter link must be a valid URL.',
            'facebook_link.url' => 'The Facebook link must be a valid URL.',
            'instagram_link.url' => 'The Instagram link must be a valid URL.',
        ]);

        $user = User::find($request->user()->id);
        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        $check = $user->create($request);
        if ($check) {
            return response()->json(['status' => 'success', 'message' => 'User password updated successfully'], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Failed to update user password'], 400);
        }
    }

    public function userupdatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ], [

            'password.confirmed' => 'The password confirmation does not match.'
        ]);

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
