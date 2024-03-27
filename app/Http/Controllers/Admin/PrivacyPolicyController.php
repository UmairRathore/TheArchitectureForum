<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PrivacyPolicyController extends Controller
{
    //
    public function __construct()
    {
        $this->_model = new PrivacyPolicy();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.privacypolicy.';
        $this->data['moduleName'] = 'Privacy Policy';
    }

    public function index()
    {
        $this->data['privacypolicy'] = $this->_model::all();
        return view($this->_viewPath . 'list-privacypolicy', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-privacypolicy');
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


        $this->data['privacypolicy'] = $this->_model;
        $this->data['privacypolicy']->description = $request->description;
        $check = $this->data['privacypolicy']->save();

        if ($check) {
            $msg = "Privacy Policy added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Privacy Policy not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['privacypolicy'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-privacypolicy', $this->data);


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

        $privacypolicy = $this->_model::find($id);

        if ($privacypolicy) {

            $privacypolicy->description = $request->description;

            $check = $privacypolicy->save();

            if ($check) {
                $msg = "Privacy Policy updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "Privacy Policy not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Privacy Policy not found.');
    }

    public function delete($id)
    {
        $privacypolicy = $this->_model::find($id);
        if ($privacypolicy) {
            $check = $privacypolicy->delete();
            if ($check) {
                $msg = "Privacy Policy deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "Privacy Policy not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Privacy Policy not found.');
    }
}
