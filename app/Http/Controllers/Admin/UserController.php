<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->_model = new User();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.User.';
        $this->data['moduleName'] = 'Tags';
    }

    public function dashboard()
    {
        return view( 'backend.index');

    }

  public function index()
    {
        $this->data['users'] = $this->_model::all();
        return view($this->_viewPath . 'list-User', $this->data);

    }


    public function delete($id)
    {
        $user = $this->_model::find($id);
        if ($user) {
            $check = $user->delete();
            if ($check) {
                $msg = "User deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "User not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Tags not found.');
    }



    public function editAdmin($id)
    {
        $admin = User::find($id);
        return view('backend.admin.edit-admin',[ 'admin'=> $admin]);
    }

    public function updateAdmin(Request $request, $id)
    {

        $admin = User::find($id);
        $admin->fname = $request->input('fname');
        $admin->lname = $request->input('lname');
        $admin->name = $request->input('lname').' '.$request->input('fname');
        if ($request->filled('email')) {
            $admin->email = $request->input('email');
        }

        if($request->filled('password') ){
            $admin->password = hash::make($request->password);
        }

        $check = $admin->update();
        $name = $admin->name;
        if ($check) {
            $msg = $name . 'Profile updated successfully';
            Session::flash('message', $msg);
        } else {
            $msg = trans('lang_data.error');
            Session::flash('message', $msg);
        }
        return redirect()->route('backend.list-user');
    }
}
