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

use App\Post;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/posts', 'PostController')->except('edit');

//// 리스트화면
//Route::get('/posts', function() {
//    return view('posts.index', [
//        'posts' => Post::orderByDesc('id')->paginate(10),
//    ]);
//})->name('posts.index');
//
//// 등록화면
//Route::get('/posts/create', function() {
//    return view('posts.create');
//})->name('posts.create');
//
//// 저장
//Route::post('/posts', function (Request $request) {
//    auth()->user()->posts()->create($request->all());
//    return redirect()->route('posts.index');
//})->name('posts.store');
//
//// 상세화면
//Route::get('/posts/{id}', function ($id, Post $post) {
//    return view('posts.show', ['post' => $post->find($id)]);
//})->name('posts.show');
//
//// 수정
//Route::put('/posts/{id}', function ($id, Request $request) {
//    Post::find($id)->update($request->all());
//    return back();
//})->name('posts.update');
//
//// 삭제
//Route::delete('/posts/destroy/{id}', function ($id, Post $post) {
//    $post->find($id)->delete();
//    return redirect()->route('posts.index');
//})->name('posts.destroy');
