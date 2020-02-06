@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">No.{{ $post->id }} Post Show</div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('posts.update', $post->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}" required autocomplete="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

                                <div class="col-md-6">
                                    <input id="content" type="text" class="form-control" name="content" value="{{ $post->content }}" required autocomplete="content">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        수정하기
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                삭제하기
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($post->comments()->orderByDesc('id')->get() as $comment)
                                <li class="list-group-item">
                                    {{ $comment->content }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
