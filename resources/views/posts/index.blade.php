@extends('layouts.app')
@section('content')
<div class="container col-8 pt-3">
    <div class="row">
        @foreach($posts as $post)

        <div class="col-4">
            <a href="/post/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100" width="auto" height="300px">
            </a>
            <p>
                <span class="font-weight-bold">
                    <a class="text-dark" href="/profile/{{$post->user->id}}">
                        <strong> {{$post->user->username}}</strong>
                    </a>
                </span>
                {{$post->caption}}
            </p>
        </div>

        @endforeach
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">{{$posts->links()}}</div>
    </div>
</div>
@endsection