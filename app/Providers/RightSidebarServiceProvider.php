<?php

namespace App\Providers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Tag;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RightSidebarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        View::composer('layouts.frontend.partials.right-SideBar', function ($view) {
//            $topics = self::CheckNull(Topic::get());
//
//            $top = self::CheckNull(
//                Question::select('questions.*')
//                    ->join('answers', 'answers.question_id', '=', 'questions.id')
//                    ->join('answer_comments', 'answer_comments.answer_id', '=', 'answers.id')
//                    ->selectRaw('COUNT(answer_comments.id) AS total_answers')
//                    ->groupBy('questions.id') // Group by non-aggregated columns
//                    ->orderByDesc('total_answers')
//                    ->limit(5)
//                    ->get()
//            );
//
//            $totalQuestions = Question::count();
//            $totalAnswers = Answer::count();
//            $totalUsers = User::count();
//            $bestAnswers = Answer::where('vote', 1)->count();
//            $totalPosts = Question::with('answers')->count();
//            $totalComments = Answer::with('comments')->count();
//            $topUsers = self::CheckNull(User::orderBy('following', 'desc')->take(5)->get());
//            $tags = self::CheckNull(Tag::limit(5)->get());
//            $recentQuestions = self::CheckNull(Question::with('users')->latest()->take(4)->get());
//
//            $data = [
//                'topics' => $topics,
//                'top' => $top,
//                'totalQuestions' => $totalQuestions,
//                'totalAnswers' => $totalAnswers,
//                'totalUsers' => $totalUsers,
//                'totalPosts' => $totalPosts,
//                'totalComments' => $totalComments,
//                'bestAnswers' => $bestAnswers,
//                'topUsers' => $topUsers,
//                'tags' => $tags,
//                'recentQuestions' => $recentQuestions,
//            ];
//
//            $view->with('rightSideBar', $data);
//        });
    }

    private static function CheckNull($dataQuery)
    {
        if ($dataQuery->count() > 0) {
            return $dataQuery->get();
        } else {
            return [];
        }
    }
}
