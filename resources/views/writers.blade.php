@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Meet the Writers</h1>
    <div class="row">
        @foreach($writers as $writer)
        <div class="col-md-3">
            <div class="card mb-4">
                <img class="card-img-top rounded-circle" src="{{ $writer->profile_picture }}" alt="{{ $writer->name }}'s Photo">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $writer->name }}</h5>
                    <p class="card-text">{{ $writer->expertise }}</p>
                    <a href="{{ route('writer.show', $writer->id) }}" class="btn btn-primary">View Articles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection