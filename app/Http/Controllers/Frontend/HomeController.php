<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index ( )
    {
        return view ('frontend.index');
    }

    public function about ( )
    {
        return view ('frontend.about');
    }

 public function notFound ( )
    {
        return view ('frontend.404');
    }

    public function blog ( )
    {
        return view ('frontend.blog');
    }

    public function blogDetails ( )
    {
        return view ('frontend.blog-details');
    }

    public function comingSoon( )
    {
        return view ('frontend.coming-soon');
    }

    public function contactUs ( )
    {
        return view ('frontend.contact-us');
    }

    public function privacyPolicy ( )
    {
        return view ('frontend.privacy-policy');
    }

    public function userAgreement ( )
    {
        return view ('frontend.user-agreement');
    }

    public function activity ( )
    {
        return view ('frontend.pages.activity');
    }

    public function badges ( )
    {
        return view ('frontend.pages.badges');
    }


    public function referral ( )
    {
        return view ('frontend.pages.referral');
    }



    public function tags ( )
    {
        return view ('frontend.pages.tags');
    }



    public function faq ( )
    {
        $faqs = Faq::all();
        return view('frontend.pages.faq', compact('faqs'));
    }














}
