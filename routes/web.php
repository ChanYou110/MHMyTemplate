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

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/weapons', 'WeaponController@index');
Route::get('/charms', 'CharmController@index');
Route::get('/skills', 'SkillController@index');
Route::get('/equipment', 'EquipmentController@index');
Route::get('/ornaments', 'OrnamentController@index');
Route::get('/post', 'PostController@index');
Route::get('/my-post/{user_id}', 'PostController@getMyPost');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts/{post}/update', 'PostController@update');
Route::middleware('auth')->group(function (){
Route::get('/user','UserController@getLoginUser');
});
Route::get('/users/{user}','UserController@getUser');
Route::post('/posts', 'PostController@store');
Route::get('/result', 'PostController@search');
Route::get('/posts/like/{post}', 'PostController@like');
Route::get('/posts/unlike/{post}', 'PostController@deleteLike');
Route::get('/lanking', 'PostController@lanking');
Route::get('/my-like', 'PostController@likeIndex');
Route::get('/users/follow/{user}', 'UserController@follow');
Route::get('/users/unfollow/{user}', 'UserController@deleteFollow');
Route::get('/timeline', 'PostController@timeline');
Route::post('/posts/{post}/delete', 'PostController@delete');

//ルーティング定義のないパスは全てtopを表示するようにする
Route::get('/{any}', function() {
    return view('top');
})->where('any', '.*');