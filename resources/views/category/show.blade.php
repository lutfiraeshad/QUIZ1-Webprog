@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $category->name }} Courses</h1>
    <div class="row">
        @foreach($category->courses as $course)
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ $course->image_url }}" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                    <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection