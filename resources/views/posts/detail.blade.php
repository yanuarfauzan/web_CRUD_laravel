@extends('layout.main')
@section('container')
<div class="container mt-3">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-5">
            <img src="{{ url('image'). '/' . $showingPost->image }}" alt="" style="width: 450px;">
        </div>
        <div class="col"></div>
    </div>
    <div class="mt-3">
        <h1>{{ $showingPost->title }}</h1>
    </div>
    <div class="mt-3">
        <p>{{ $showingPost->content }}</p>
    </div>
</div>
@endsection