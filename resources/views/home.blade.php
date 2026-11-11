@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
    <h2 class="fw-bold">Movie Flex System</h2>

    <p class="text-muted mb-4">A small system for keeping track of movie and thier genre.</p>

    <a href="{{ route('movies.index') }}" class="btn btn-primary">Open the movies list</a>
</div>

<div class="row g-3 mb-4">
    <div class="col-sm-6">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <div class="display-6 fw-bold">{{ $movieCount }}</div>
                <div class="text-muted">movies on record</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <div class="display-6 fw-bold">{{ $genreCount }}</div>
                <div class="text-muted">genres</div>
            </div>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body d-flex align-items-center gap-3 gap-md-4">
            <img src="{{ asset('img/me.jpg') }}" alt="" width="96" height="96" class="rounded-circle object-fit-cover">
            <div class="">
                <h5 class="mb-1">JUN B. AMARO</h5>
                <div class="text-muted small">BSIT | 4th Year | Block A</div>
            </div>
        </div>
    </div>
</div>
@endsection
