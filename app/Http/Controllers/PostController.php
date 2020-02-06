<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    //리스트화면
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::orderByDesc('id')->paginate(10),
        ]);
    }

    //등록화면
    public function create()
    {

        if (is_null(Auth::user())) {
            return redirect()->route('posts.index')->with('jsAlert', '로그인 후 작성이 가능합니다.');
        }

        return view('posts.create');
    }

    //저장
    public function store(Request $request)
    {
        auth()->user()->posts()->create($request->all());

        return redirect()->route('posts.index');
    }

    //상세화면
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    //수정
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return back();
    }

    //삭제
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
