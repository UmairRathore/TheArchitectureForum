<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    //
    public function __construct()
    {
        $this->_model = new Aboutus();
        $this->setDefaultData();
    }

    private function setDefaultData()
    {
        $this->_viewPath = 'backend.aboutus.';
        $this->data['moduleName'] = 'About us';
    }

    public function index()
    {
        $this->data['aboutus'] = $this->_model::all();
        return view($this->_viewPath . 'list-aboutus', $this->data);

    }

    public function create()
    {
        return view($this->_viewPath . 'create-aboutus');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'aboutus_image' => 'image|mimes:jpeg,png,jpg,gif|max:6048',
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $this->data['aboutus'] = $this->_model;

        $aboutus_image = $this->handleFileUpload($request, 'aboutus_image', 'aboutus_image');


        $this->data['aboutus']->title = $request->title;
        $this->data['aboutus']->description = $request->description;
        $this->data['aboutus']->aboutus_image = $aboutus_image;

        $check = $this->data['aboutus']->save();
        if ($check) {
            $msg = "About us added successfully.";
            Session::flash('message', $msg);
        } else {
            $msg = "About us not added successfully.";
            Session::flash('required fields empty', $msg);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $this->data['aboutus'] = $this->_model::find($id);
        return view($this->_viewPath . 'edit-aboutus', $this->data);


    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'aboutus_image' => 'image|mimes:jpeg,png,jpg,gif|max:6048',
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $aboutus = $this->_model::find($id);

        if ($aboutus) {
            if ($request->aboutus_image) {
                $this->deleteFiles($aboutus->aboutus_image);

                $aboutus_image = $this->handleFileUpload($request, 'aboutus_image', 'aboutus_image');
                $aboutus->aboutus_image = $aboutus_image;

            }
            $aboutus->title = $request->title;
            $aboutus->description = $request->description;

            $check = $aboutus->save();

            if ($check) {
                $msg = "About Us updated successfully.";
                Session::flash('message', $msg);
            } else {
                $msg = "About Us not updated successfully.";
                Session::flash('required fields empty', $msg);
            }

            return redirect()->back();
        }
        return redirect()->back()->with('error', 'About Us not found.');
    }

    public function delete($id)
    {
        $aboutus = $this->_model::find($id);
        if ($aboutus) {
            $this->deleteFiles($aboutus->aboutus_image);
            $check = $aboutus->delete();
            if ($check) {
                $msg = "About us deleted successfully.";
                Session::flash('info_deleted', $msg);
            } else {
                $msg = "About us not deleted successfully.";
                Session::flash('required fields empty', $msg);
            }
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'About us not found.');
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

            $directory = storage_path('assets/images/aboutus_images/' . $folderName . '/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, $imageName);

            return $directory . $imageName;
        }

        return null;
    }
}
