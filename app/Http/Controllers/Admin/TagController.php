<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    //
    public function __construct()
    {
        $this->_model = new Tag();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.tags.';
        $this->data['moduleName'] = 'Tags';
    }

    public function index()
    {
        $this->data['tags'] = $this->_model::all();
        return view($this->_viewPath . 'list-tags', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-tags');
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


        $this->data['tags'] = $this->_model;
        $this->data['tags']->title = $request->title;
        $this->data['tags']->description = $request->description;
        $check = $this->data['tags']->save();

        if ($check) {
            $msg = "Tags added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Tags not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['tags'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-tags', $this->data);


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

        $tag = $this->_model::find($id);

        if ($tag) {

            $tag->title = $request->title;
            $tag->description = $request->description;

            $check = $tag->save();

            if ($check) {
                $msg = "Tags updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "Tags not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Tags not found.');
    }

    public function delete($id)
    {
        $tag = $this->_model::find($id);
        if ($tag) {
            $check = $tag->delete();
            if ($check) {
                $msg = "Tags deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "Tags not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Tags not found.');
    }
}
