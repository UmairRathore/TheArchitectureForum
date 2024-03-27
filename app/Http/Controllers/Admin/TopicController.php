<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TopicController extends Controller
{
    //
    public function __construct()
    {
        $this->_model = new Topic();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.topics.';
        $this->data['moduleName'] = 'Topic';
    }

    public function index()
    {
        $this->data['topics'] = $this->_model::all();
        return view($this->_viewPath . 'list-topics', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-topics');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $this->data['topics'] = $this->_model;
        $this->data['topics']->title = $request->title;
        $check = $this->data['topics']->save();

        if ($check) {
            $msg = "Topic added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Topic not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['topics'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-topics', $this->data);


    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $this->data['topics'] = $this->_model::find($id);

        if ($this->data['topics']) {

            $this->data['topics']->title = $request->title;

            $check = $this->data['topics']->save();

            if ($check) {
                $msg = "Topic updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "Topic not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Topic not found.');
    }

    public function delete($id)
    {
        $topics = $this->_model::find($id);
        if ($topics) {
            $check = $topics->delete();
            if ($check) {
                $msg = "Topic deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "Topic not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Topic not found.');
    }
}
