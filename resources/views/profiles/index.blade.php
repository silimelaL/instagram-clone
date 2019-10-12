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
            <a href="#">Add Post</a>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>30 </strong>posts</div>
            <div class="pr-5"><strong>23k </strong>followers</div>
            <div class="pr-5"><strong>1000 </strong>following</div>
        </div>
    <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
    <div>{{$user->profile->description}}</div>
    <a href="{{$user->profile->url}}">{{$user->profile->url}}</a>
    </div>
  
</div>
<div class="row pt-5">
    <div class="col-4">
        <img src="{{asset('posts/post1.jpg')}}" class="w-100">
    </div>
    <div class="col-4">
            <img src="{{asset('posts/post3.jpg')}}" class="w-100">
        </div>
        <div class="col-4">
                {{-- <img src="{{asset('posts/post2.jpeg')}}" class="w-100"> --}}
            </div>
</div>
</div>
@endsection
