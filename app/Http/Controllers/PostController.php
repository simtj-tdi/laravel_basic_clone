<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

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
        return view('posts.create');
    }

    //저장
    public function store(Request $request)
    {
        //검증(validation)
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ]);

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
//        if (auth()->user()->id != $post->user_id) {
//            echo "수정할 수 없습니다.";
//            exit;
//        }
        $post->check();

        exit;

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
