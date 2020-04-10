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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home','StudentController');

// route to show form tutor
Route::get('/showformTutor','userController@showFormTotur');
// route to add tutor
Route::post('/addTotur','userController@addTotur')->name('addTotur');

// viewdetail of student.
Route::get('/details{id}','StudentController@details')->name('details');
//resource controller comment
Route::resource('/comment','commentController');
// route for viewdetailcomment
Route::get('/viewdetailcomment{id}','commentController@comment')->name('comment');
// route to show form comment
Route::get('/formcommennt{id}','commentController@showForm')->name('showForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
