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

use Scool\Curriculum\Study;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile/tokens', function () {
        return view('tokens');
    });

//    Route::resource('studies', 'StudiesController');

});

Route::get('/test', function () {
    $study = new Study();
    dd($study);
});
