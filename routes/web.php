<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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
Route::get('/', function (){
    return view('welcome');
});
Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create')->name('createPostForm');
Route::post('posts', 'PostsController@store');


Route::get('/posts/{id}', 'PostsController@show')->name('singlePost');
Route::post('/posts/{id}/comments', 'CommentsController@store');

Route::get('/register', 'AuthController@getRegisterForm');
Route::post('/users', 'AuthController@register');

