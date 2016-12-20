<?php

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

use Scool\Curriculum\Stats\Stats;
use Scool\Curriculum\Models\Study;
use Scool\Curriculum\Models\Course;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile/tokens', function () {
        return view('tokens');
    });
    #adminlte_routes
    Route::get('about', 'AboutController@index')->name('about');

    Route::get('course2', 'Course2Controller@index')->name('course2');

    Route::get('course1', function ()    {
        $data = [];
        return view('course1',$data);
    })->name('course1');

    Route::get('course', function ()    {
        $data = [];
        return view('course',$data);
    })->name('course');


//    Route::resource('studies', 'StudiesController');

});

Route::get('/test', function () {

    DB::listen(function ($event) {
        dump($event->sql);
        dump($event->bindings);
    });

//    $studies = Study::all();
//    $courses = Course::all();
//    return $courses;
    Stats::of(Scool\Curriculum\Models\Study::class);
    return Stats::total();
});
