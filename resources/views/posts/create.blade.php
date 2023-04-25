@extends('layouts.postsLayout')
@section('title', 'Create Post')
@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button type="submit">Create</button>
    </form>