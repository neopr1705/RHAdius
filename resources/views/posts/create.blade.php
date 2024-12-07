@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">
        <label>Content:</label>
        <textarea name="content"></textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
