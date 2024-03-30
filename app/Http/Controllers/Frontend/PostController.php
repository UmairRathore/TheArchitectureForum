<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Tag;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //

    public function questions ( )
    {
        $tags = Tag::all();
        $topics = Topic::all();
        $data = [
            'tags' => $tags,
            'topics' => $topics
        ];
        return view ('frontend.questions.questions');
    }



    public function askQuestions ( )
    {
        $tags = Tag::all();
        $topics = Topic::all();
        $data = [
            'tags' => $tags,
            'topics' => $topics
        ];
        return view ('frontend.questions.ask-questions',compact(['data', $data]));
    }



    public function allQuestions ( )
    {
        return view ('frontend.questions.all-questions');
    }




    public function storeQuestion(Request $request)
    {
//        $request->validate([
//            'title' => 'required|string',
//            'category' => 'required',
//            'tags' => 'required|string',
//            // Add more validation rules as needed
//        ]);


        $question = new Question();
        $question->title = $request->title;
        $question->user_id= auth()->user()->id;
        $question->description = $request->description;
        if ($request->tags) {
            $question->tag_id = explode(',', $request->tags);
        }

        $question->topic_id = $request->topic;

        if ($request->hasFile('file')) {
            $folderName = 'profile_image';
            $image = $request->file('file');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = public_path('assets/images/' . $folderName . '/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, $imageName);
            $question->question_image = $folderName . '/' . $imageName; // Store relative path
        }

        $question->save();

        // Optionally, handle tags and category relations

        return response()->json(['message' => 'Question posted successfully'], 200);
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
