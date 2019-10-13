@extends('layouts.app')

@section('content')
<div class="container col-8 pt-3">
<div class="row">
    <div class="col-3">
            <img src="/img/laravel-logo.png" style="height:150px" class="rounded-circle">
    </div>
    <div class="col-9 pt-3">
        <div class="d-flex justify-content-between align-items-baseline">
            <h3>{{$user->username}}</h3>
            <a href="/post/create">Add Post</a>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>{{$user->posts->count()}} </strong>posts</div>
            <div class="pr-5"><strong>23k </strong>followers</div>
            <div class="pr-5"><strong>1000 </strong>following</div>
        </div>
    <div class="pt-3 font-weight-bold">{{$user->profile->title ?? "No title"}}</div>
    <div>{{$user->profile->description}}</div>
    <a href="{{$user->profile->url}}">{{$user->profile->url}}</a>
    </div>
  
</div>
<div class="row pt-5">
    @foreach ($user->posts as $post)
    <div class="col-4 pb-4">
        <img src="/storage/{{$post->image}}" class="w-100">
    </div>
    @endforeach
</div>
</div>
@endsection
