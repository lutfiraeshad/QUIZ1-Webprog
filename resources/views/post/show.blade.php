@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $post->title }}</h1>
    <div class="card mb-4">
        <img class="card-img-top" src="{{ $post->image_url }}" alt="Post Image">
        <div class="card-body">
            <p class="card-text">{{ $post->content }}</p>
        </div>
    </div>
    <p><strong>Posted by:</strong> {{ $post->author->name }} on {{ $post->created_at->format('d M Y') }}</p>
    <a href="{{ route('category.show', $post->category->id) }}" class="btn btn-secondary">Back to Category</a>
</div>
@endsection