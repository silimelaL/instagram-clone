@extends('layouts.app')
@section('content')
<div class="container col-8 pt-3">
    <div class="row">
        <div class="col-8">
            <img src="/store/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="row">
                    <div class="col-6">
                        <h6>
                            <a class="text-dark" href="/profile/{{$post->user->id}}"><img
                                    src="/store/{{$post->user->profile->image ?? "profile/profile.jpg"}}" height="20px"
                                    class="rounded-circle">
                                <strong> {{$post->user->username}}</strong>
                            </a>

                        </h6>
                    </div>
                    <div class="col-6">
                        @if($post->user->id!=auth()->user()->id)
                        <follow-botton user-id={{$post->user->id}} follows="{{$follows}}"></follow-botton>
                        @endif
                    </div>
                    <p class="pt-3">{{$post->caption}}<p>
                </div>
            </div>
        </div>
    </div>
    @endsection