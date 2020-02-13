@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <image src="/storage{{$post->image}}" class="w-100">
        </div>
    </div>

</div>
@endsection
