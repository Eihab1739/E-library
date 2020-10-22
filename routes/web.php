<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

    Route::get('/','PagesController@index')->name('index');

    Route::get('/category/{id}','PagesController@viewcategory')->name('category');
    Route::get('/book/{id}','PagesController@viewbook')->name('book');
    Route::post('/comment/{id}',['uses'=>'PagesController@addcomment','middleware'=>'auth'])->name('comment');


    Route::group(['middleware'=>'roles','roles'=>'admins'],function(){
    Route::resource('/upload','UploadController');

    });

    Route::group(['prefix' => 'admin','middleware'=>'roles','roles'=>'admins'], function () {
        Route::resource('users','AdminUsersController');

        Route::resource('categories','AdminCategoryController');

        Route::resource('exams','examsController');
        Route::resource('books','booksController');
        Route::resource('projects','projectController');
    });
    Route::resource('createuser','createuserController');
    Route::get('createAdmin','createuserController@showAddAdmin')->name('createAdmin');
    Route::post('storeAdmin','createuserController@storeAdmin')->name('storeAdmin');



    Route::prefix('profile/{user:username}/portfolios')->group(function () {
        /*
        |===============================================
        |                Store Portfolio
        |===============================================
        */
        Route::post('/', 'HomeController@index')
            ->name('profile.portfolios.store');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/books', function () {
        return view('browse-books');
    });

    Route::get('/projects', function () {
        return view('browse-projects');
    });

    Route::get('/exams', function () {
        return view('browse-exams');
    });

    Route::get('/results', function () {
        $exams= App\exam::where('title','like','%'.request('examsearch').'%')->get();
        $exams= App\exam::where('author','like','%'.request('examsearch').'%')->get();
        $exams= App\exam::where('info','like','%'.request('examsearch').'%')->get();
        $exams= App\exam::where('examyear','like','%'.request('examsearch').'%')->get();



        return view('examsSearchResults')
        ->with('exams',$exams)
        ->with('title','Result: '.request('examsearch'))
        ->with('author','Result: '.request('examsearch'))
        ->with('info','Result: '.request('examsearch'))
        ->with('examyear','Result: '.request('examsearch'))
        ->with('query', request('examsearch'));
    });

});