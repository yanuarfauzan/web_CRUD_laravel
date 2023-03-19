@extends('layout.main')
@section('container')
<div class="container mt-3">
    <h1>{{ $showingPost->title }}</h1>
    <div class="mt-3">
        <p>{{ $showingPost->content }}</p>
    </div>
</div>
@endsection