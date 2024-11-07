@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Welcome to EduFun</h1>
    <p class="lead">Explore the latest in Interactive Multimedia and Software Engineering!</p>
    
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ $post->image_url }}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ url('detail/' . $post->id) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination for more posts -->
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection