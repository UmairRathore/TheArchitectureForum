<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContentPolicyController extends Controller
{
    //
    public function __construct()
    {
        $this->_model = new ContentPolicy();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.contentpolicy.';
        $this->data['moduleName'] = 'Content Policy';
    }

    public function index()
    {
        $this->data['contentpolicy'] = $this->_model::all();
        return view($this->_viewPath . 'list-contentpolicy', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-contentpolicy');
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


        $this->data['contentpolicy'] = $this->_model;
        $this->data['contentpolicy']->description = $request->description;
        $check = $this->data['contentpolicy']->save();

        if ($check) {
            $msg = "Content Policy added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Content Policy not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['contentpolicy'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-contentpolicy', $this->data);


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

        $contentpolicy = $this->_model::find($id);

        if ($contentpolicy) {

            $contentpolicy->description = $request->description;

            $check = $contentpolicy->save();

            if ($check) {
                $msg = "Content Policy updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "Content Policy not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Content Policy not found.');
    }

    public function delete($id)
    {
        $contentpolicy = $this->_model::find($id);
        if ($contentpolicy) {
            $check = $contentpolicy->delete();
            if ($check) {
                $msg = "Content Policy deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "Content Policy not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Content Policy not found.');
    }
}
