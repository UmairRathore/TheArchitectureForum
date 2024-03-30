<?php

namespace App\Providers;

use App\Models\Topic;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LeftSidebarServiceProvider extends ServiceProvider
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
        View::composer('layouts.frontend.partials.left-SideBar', function ($view) {
            $topics = Topic::get();
            $view->with('leftSidebarData', $topics);
        });
    }
}
