<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

    public function termsConditions ( )
    {
        return view ('frontend.terms-conditions');
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
        return view ('frontend.pages.faq');
    }



    public function groups ( )
    {
        return view ('frontend.pages.groups');
    }



    public function technology ( )
    {
        return view ('frontend.pages.technology');
    }



    public function polls ( )
    {
        return view ('frontend.pages.polls');
    }



    public function communities ( )
    {
        return view ('frontend.pages.communities');
    }



    public function education ( )
    {
        return view ('frontend.pages.education');
    }


    public function user ( )
    {
        return view ('frontend.user.user');
    }



    public function userProfile ( )
    {
        return view ('frontend.user.user-profile');
    }


    public function userGroups ( )
    {
        return view ('frontend.user.user-groups');
    }


    public function userEditProfile ( )
    {
        return view ('frontend.user.user-edit-profile');
    }




    public function questions ( )
    {
        return view ('frontend.questions.questions');
    }



    public function askQuestions ( )
    {
        return view ('frontend.questions.ask-questions');
    }



    public function allQuestions ( )
    {
        return view ('frontend.questions.all-questions');
    }



    public function unanswered ( )
    {
        return view ('frontend.answers.unanswered');
    }


    public function mostVisitedAnswered ( )
    {
        return view ('frontend.answers.most-visited');
    }


    public function mostDetailAnswered ( )
    {
        return view ('frontend.answers.most-detail-answered');
    }


    public function bestAnswered ( )
    {
        return view ('frontend.answers.best-answered');
    }


    public function mostAnswered ( )
    {
        return view ('frontend.answers.most-answered');
    }




}
