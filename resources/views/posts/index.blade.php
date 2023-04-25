@extends('layouts.postsLayout')
@section('title', 'All Posts')
@section('content')
    @foreach ($posts as $post)
        <x-post :post="$post" :loop="$loop" />
    @endforeach
@endsection
