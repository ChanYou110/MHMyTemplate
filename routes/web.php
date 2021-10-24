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

Route::prefix("posts")->group(function () {
    Route::get('{post}', 'PostController@show');
    Route::get('like/{post}', 'PostController@like');
    Route::get('unlike/{post}', 'PostController@deleteLike');
    Route::get('my-post/{user_id}', 'PostController@getMyPost');
    Route::post('', 'PostController@store');
    Route::post('{post}/delete', 'PostController@delete');
    // Route::post('{post}/update', 'PostController@update');
});
Route::prefix("users")->group(function () {
    Route::get('{user}','UserController@getUser');
    Route::get('follow/{user}', 'UserController@follow');
    Route::get('unfollow/{user}', 'UserController@deleteFollow');
    Route::post('{user}/edit-profile', 'UserController@editProfile');
    // Route::post('{user}/edit-profile', 'UserController@editProfile');
});
Route::middleware('auth')->group(function (){
    Route::get('/user','UserController@getLoginUser');
});
Route::get('/weapons', 'WeaponController@index');
Route::get('/charms', 'CharmController@index');
Route::get('/skills', 'SkillController@index');
Route::get('/equipment', 'EquipmentController@index');
Route::get('/ornaments', 'OrnamentController@index');
Route::get('/results', 'PostController@search');
Route::get('/lanking', 'PostController@lanking');
Route::get('/my-like', 'PostController@likeIndex');
Route::get('/timeline', 'PostController@timeline');

//ルーティング定義のないパスは全てtopを表示するようにする
Route::get('/{any}', function() {
    return view('top');
})->where('any', '.*');