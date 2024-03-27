<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    //

    public function __construct()
    {
        $this->_model = new Faq();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.faq.';
        $this->data['moduleName'] = 'Faq';
    }

    public function index()
    {
        $this->data['faq'] = $this->_model::all();
        return view($this->_viewPath . 'list-faq', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-faq');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $this->data['faq'] = $this->_model;
        $this->data['faq']->title = $request->title;
        $this->data['faq']->description = $request->description;
        $check = $this->data['faq']->save();

        if ($check) {
            $msg = "Faq added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Faq not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['faq'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-faq', $this->data);


    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $this->data['faq'] = $this->_model::find($id);

        if ($this->data['faq']) {

            $this->data['faq']->title = $request->title;
            $this->data['faq']->description = $request->description;

            $check = $this->data['faq']->save();

            if ($check) {
                $msg = "Faq updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "Faq not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Faq not found.');
    }

    public function delete($id)
    {
        $faq = $this->_model::find($id);
        if ($faq) {
            $check = $faq->delete();
            if ($check) {
                $msg = "Faq deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "Faq not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Faq not found.');
    }
}
