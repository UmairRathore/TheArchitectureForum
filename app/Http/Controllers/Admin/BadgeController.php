<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Badge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BadgeController extends Controller
{
    //

    public function __construct()
    {
        $this->_model = new Badge();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.badge.';
        $this->data['moduleName'] = 'Badge';
    }

    public function index()
    {
        $this->data['badges'] = $this->_model::all();
        return view($this->_viewPath . 'list-badge', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-badge');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'badge_image' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $this->data['badges'] = $this->_model;

        $badges_image = $this->handleFileUpload($request, 'badge_image', 'badge_image');


        $this->data['badges']->title = $request->title;
        $this->data['badges']->description = $request->description;
        $this->data['badges']->badge_image = $badges_image;

        $check = $this->data['badges']->save();
        if ($check) {
            $msg = "Badge added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "Badge not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['badges'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-badge', $this->data);


    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'badge_image' => 'image|mimes:jpeg,png,jpg,gif|max:6048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $badges = $this->_model::find($id);

        if ($badges) {
            if ($request->badge_image) {
                $this->deleteFiles($badges->badge_image);

                $badges_image = $this->handleFileUpload($request, 'badge_image', 'badge_image');
                $badges->badge_image = $badges_image;

            }
            $badges->title = $request->title;
            $badges->description = $request->description;

            $check = $badges->save();

            if ($check) {
                $msg = "Badge updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "Badge not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Badge not found.');
    }

    public function delete($id)
    {
        $badges = $this->_model::find($id);
        if ($badges) {
            $this->deleteFiles($badges->badge_image);
            $check = $badges->delete();
            if ($check) {
                $msg = "Badge deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "Badge not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Badge not found.');
    }

    private function deleteFiles($filePath)
    {
        if ($filePath) {
            $fullPath = public_path($filePath);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }
    }

    private function handleFileUpload($request, $fieldName, $folderName)
    {

        if ($request->file($fieldName)) {
            $image = $request->file($fieldName);
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = storage_path('assets/images/badge_images/' . $folderName . '/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, $imageName);

            return $directory . $imageName;
        }

        return null;
    }
}
