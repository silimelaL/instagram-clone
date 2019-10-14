@extends('layouts.app')
@section('content')
<div class="container col-8 pt-3">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <h6>
                    <a class="text-dark" href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->user->profile->image ?? "profile/logo.png"}}" height="20px" class="rounded-circle">
                      <strong> {{$post->user->username}}</strong>
                    </a>
                    <a href="#" class="font-weight-bold pl-2">Follow</a>
                </h6>
                <p class="pt-3">{{$post->caption}}<p>
            </div>
        </div>
    </div>
</div>
@endsection
