@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 pt-2">
                <img
                    src="https://scontent-bru2-1.cdninstagram.com/v/t51.2885-19/s320x320/38194989_303893960417449_3206698221862649856_n.jpg?_nc_ht=scontent-bru2-1.cdninstagram.com&_nc_ohc=pK-uZMmCTwIAX8wv1K8&oh=a6f362fbc51e9624e56181b145a2c4be&oe=5FC7C111"
                    class="rounded-circle" width="200px" height="200px" alt="">
            </div>
            <div class="col-9 pt-2">
                <div class="pb-2 d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->username}}</h1>
                    <a href="/posts/create">Add a new post</a>
                </div>
                <div>
                    <a href="/profile/{{$user->id}}">Edit Profile</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong class="pr-1">{{$user->posts->count()}}</strong>posts</div>
                    <div class="pr-5"><strong class="pr-1">281</strong>followers</div>
                    <div class="pr-5"><strong class="pr-1">226</strong>followings</div>
                </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div class="pt-4 font-weight-bold">{{$user->profile->bio}}</div>
                <div class="pt-4 font-weight-bold">{{$user->profile->url}}</div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-3 pb-4">
                    <a href="/posts/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
