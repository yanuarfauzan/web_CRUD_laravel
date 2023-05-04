@extends('layout.main')

@section('container')
    <h1>Hello, {{ Auth::user()->name }}, Role anda: {{ Auth::user()->role->name; }}</h1>
@endsection