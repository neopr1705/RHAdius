@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h1>{{ isset($post) ? 'Edit Post' : 'Create New Post' }}</h1>

        <form 
            method="POST" 
            action="{{ isset($post) ? route('posts.update', $post) : route('posts.store') }}"
            class="form"
        >
            @csrf
            @if(isset($post))
                @method('PUT')
            @endif

            <!-- Input untuk Judul -->
            <div class="form-group">
                <label for="title">Title:</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ old('title', $post->title ?? '') }}" 
                    placeholder="Enter the post title" 
                    class="form-input"
                    required
                >
                @error('title')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input untuk Konten -->
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea 
                    name="content" 
                    id="content" 
                    placeholder="Enter the post content" 
                    class="form-input" 
                    required
                >{{ old('content', $post->content ?? '') }}</textarea>
                @error('content')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="form-button">
                {{ isset($post) ? 'Update Post' : 'Create Post' }}
            </button>
        </form>
    </div>
@endsection
