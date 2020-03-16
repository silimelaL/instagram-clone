@extends('layouts.app')
@section('content')
<div class="container col-8 pt-3">
    <div class="row">
        <div class="col-3">
            <img src="/store/profile/{{$user->profile->image ?? "profile.jpg"}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h5 font-weight-bold">{{$user->username}}</div>
                    @if($user->id!=auth()->user()->id)
                    <follow-botton user-id={{$user->id}} follows="{{$follows}}"></follow-botton>
                    @endif
                </div>
                @can('update',$user->profile)
                <a href="/post/create">Add Post</a>
                @endcan
            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$postsCount}}</strong>posts</div>
                <div class="pr-5">
                    <followers-count followers="{{$followersCount}}"></followers-count>followers
                </div>
                <div class="pr-5"><strong>{{$followingCount}}</strong>following</div>
            </div>
            <div class="pt-3 font-weight-bold">{{$user->profile->title ?? "No title"}}</div>
            <div>{{$user->profile->description}}</div>
            <a href="{{$user->profile->url}}">{{$user->profile->url}}</a>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/post/{{$post->id}}">
                <img src="/store/{{$post->image}}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection