<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserAgreement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserAgreementController extends Controller
{
    //
    public function __construct()
    {
        $this->_model = new UserAgreement();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.userAgreement.';
        $this->data['moduleName'] = 'User Agreement';
    }

    public function index()
    {
        $this->data['userAgreement'] = $this->_model::all();
        return view($this->_viewPath . 'list-userAgreement', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-userAgreement');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $this->data['userAgreement'] = $this->_model;
        $this->data['userAgreement']->description = $request->description;
        $check = $this->data['userAgreement']->save();

        if ($check) {
            $msg = "User Agreement added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "User Agreement not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['userAgreement'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-userAgreement', $this->data);


    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $userAgreement = $this->_model::find($id);

        if ($userAgreement) {

            $userAgreement->description = $request->description;

            $check = $userAgreement->save();

            if ($check) {
                $msg = "User Agreement updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "User Agreement not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        return redirect()->back()->with('error', 'User Agreement not found.');
    }

    public function delete($id)
    {
        $userAgreement = $this->_model::find($id);
        if ($userAgreement) {
            $check = $userAgreement->delete();
            if ($check) {
                $msg = "User Agreement deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "User Agreement not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'User Agreement not found.');
    }
}
