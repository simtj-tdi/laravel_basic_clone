@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($posts as $post)
                                <li class="list-group-item">
                                    <div class="d-flex w-100 justify-content-between">
                                        <a href="{{ route('posts.show', $post->id) }}">
                                            <h5 class="mb-1">{{ $post->id }}. {{ $post->title }}</h5>
                                        </a>
                                        <small>{{ $post->user->name }}</small>
                                    </div>
                                    <p class="mb-1">{{ $post->content }}</p>
                                </li>
                            @endforeach
                        </ul>

                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
