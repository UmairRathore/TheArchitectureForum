<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\AnswerVote;
use App\Models\Question;
use App\Models\QuestionVote;
use App\Models\Tag;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //

//    public function questions ( )
//    {
//        $tags = Tag::all();
//        $topics = Topic::all();
//        $data = [
//            'tags' => $tags,
//            'topics' => $topics
//        ];
//        return view ('frontend.questions.questions');
//    }

    public function oneQuestion()
    {
        $question = Question::
        select('users.name as userName', 'users.profile_image as userProfileImage',
            'users.id as userID', 'questions.*', 'topics.id as topicID',
            'topics.title as topicName', 'question_votes.up_votes as questionUpVote',
            'question_votes.down_votes as questionDownVote')
            ->join('users', 'users.id', '=', 'questions.user_id')
            ->join('topics', 'topics.id', '=', 'questions.topic_id')
            ->join('question_votes', 'question_votes.question_id', '=', 'questions.id')
            ->first();

        $allTags = [];
//        foreach ($questions as $question) {
            $tagIDs = explode(',', $question->tag_id);
        $question->tags = Tag::whereIn('id', $tagIDs)->get();

            $allTags = array_merge($allTags, $question->tags->toArray());

            $totalQuestionVotes = $question->questionUpVote + $question->questionDownVote;
        $question->totalVotes = $totalQuestionVotes;

        $answers = Answer::Select('users.name as userName', 'users.profile_image as userProfileImage',
            'users.id as userID', 'answers.*','answer_votes.up_votes as answerUpVote',
            'answer_votes.down_votes as answerDownVote')->where('question_id',$question->id)
            ->join('users', 'users.id', '=', 'answers.user_id')
            ->join('answer_votes', 'answer_votes.answer_id', '=', 'answers.id')

            ->get();

        $counts = $answers->count();
//        }
//        $tags = Tag::all();
//        $topics = Topic::all();
//        $data = [
//            'count' => $counts,
//            '$answers' => $answers
//        ];
        return view ('frontend.questions.questions',
            compact('question',$question,'answers',$answers,'counts',$counts));
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
        $question = new Question();
        $question->title = $request->title;
        $question->user_id= auth()->user()->id;
        $question->description = $request->description;
        $question->tag_id =$request->tags;
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


        return response()->json(['message' => 'Question posted successfully'], 200);
    }


    public function vote(Request $request, $questionID)
    {
        $voteType = $request->input('vote_type');

        // Check if the user has already voted on this question
        $existingVote = QuestionVote::where('question_id', $questionID)
            ->where('user_id', auth()->user()->id)
            ->first();

        if (!$existingVote) {
            // If the user hasn't voted yet, create a new vote record
            $question = new QuestionVote();
            $question->question_id = $questionID;
            $question->user_id = auth()->user()->id;

            if ($voteType == 'up') {
                $question->up_votes = 1;
            } elseif ($voteType == 'down') {
                $question->down_votes = 1;
            } else {
                return response()->json(['error' => 'Invalid vote type'], 400);
            }

            $question->save();
            return response()->json(['message' => ucfirst($voteType) . ' vote added successfully']);
        } else {
            return response()->json(['error' => 'You cannot vote again']);
        }
    }


    public function storeAnswer(Request $request)
    {
        $question = new Answer();
        $question->user_id= auth()->user()->id;
        $question->question_id = $request->questionID;
        $question->description = $request->description;

        if ($request->hasFile('file')) {
            $folderName = 'profile_image';
            $image = $request->file('file');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $directory = public_path('assets/images/' . $folderName . '/');

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }

            $image->move($directory, $imageName);
            $question->answer_image = $folderName . '/' . $imageName; // Store relative path
        }

        $question->save();


        return response()->json(['message' => 'Answer posted successfully'], 200);
    }


    public function voteAnswer(Request $request, $answerId)
    {
        $voteType = $request->input('vote_type');
        // Check if the user has already voted on this question
        $existingVote = AnswerVote::where('answer_id', $answerId)
            ->where('user_id', auth()->user()->id)
            ->first();

        if (!$existingVote) {
            // If the user hasn't voted yet, create a new vote record
            $question = new AnswerVote();
            $question->answer_id = $answerId;
            $question->user_id = auth()->user()->id;

            if ($voteType == 'up') {
                $question->up_votes = 1;
            } elseif ($voteType == 'down') {
                $question->down_votes = 1;
            } else {
                return response()->json(['error' => 'Invalid vote type'], 400);
            }

            $question->save();
            return response()->json(['message' => ucfirst($voteType) . ' vote added successfully']);
        } else {
            return response()->json(['error' => 'You cannot vote again']);
        }
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
