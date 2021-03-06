<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
        $this->authorizeResource('App\Post', 'post');
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
//      $this->authorize('update', $post);
//      $this->authorizeResource();

//        if (Gate::allows('update', $post)) {
//            $post->update($request->all());
//
//            return back();
//        } else {
//            echo "수정할 수 없습니다.";
//            exit;
//        }

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
