@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-4">
           <img src="/images/download.png" class="rounded-circle">
       </div>
       <div class="col-9 pt-5">
       <div class="d-flex justify-content-between align-items-baseline">
           <h1>{{$user->username}}</h1>
           <a href="/p/create">Add new post</a>
       </div>
       <a href="/profile/{{$user->id}}/edit">Edit profile</a>
           <div class="d-flex">
           <div class="p-3"><strong>{{$user->posts->count()}}</strong>posts </div>
           <div class="p-3"><strong>24</strong> followers</div>
           <div class="p-3"><strong>11</strong>following</div>
           </div>
        <div class="p-2 font-weight-bold">{{$user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
        <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a> </div>
       </div>
   </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="{{ asset("storage/$post->image")}}" class="w-100">
           </a>
            </div>
        @endforeach
    </div>

</div>
@endsection
