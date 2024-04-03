<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Question;
use App\Models\Tag;
use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index ( )
    {

        $questions = Question::
        select('users.name as userName', 'users.profile_image as userProfileImage',
            'users.id as userID', 'questions.*', 'topics.id as topicID',
            'topics.title as topicName', 'question_votes.up_votes as questionUpVote',
            'question_votes.down_votes as questionDownVote')
            ->join('users', 'users.id', '=', 'questions.user_id')
            ->join('topics', 'topics.id', '=', 'questions.topic_id')
            ->leftJoin('question_votes', 'question_votes.question_id', '=', 'questions.id')
            ->take(10)
            ->get();

        $allTags = [];
        $totalVotes = 0; // Initialize total votes counter

        foreach ($questions as $question) {
            $tagIDs = explode(',', $question->tag_id);
            $question->tags = Tag::whereIn('id', $tagIDs)->get();

            $allTags = array_merge($allTags, $question->tags->toArray());

            $totalQuestionVotes = $question->questionUpVote + $question->questionDownVote;
            $question->totalVotes = $totalQuestionVotes;
        }

//dd($questions);


     $tags = Tag::all();
        $topics = Topic::all();
        $data = [
            'tags' => $tags,
            'topics' => $topics,
            'questions' => $questions
        ];
        return view ('frontend.index',compact('data',$data));
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
