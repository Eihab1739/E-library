<?php

namespace App\Providers;
use App\Category ;
use App\Book ;
use App\Project ;
use App\exam ;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $categories = Category::all();
        view()->share('allCategories',$categories);

        $books = Book::all();
        view()->share('allBooks',$books);

        $exams = Exam::all();
        view()->share('allExams',$exams);

        $projects = Project::all();
        view()->share('allProjects',$projects);
    }
}
