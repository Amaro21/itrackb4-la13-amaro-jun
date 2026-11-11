@extends('layouts.app')
@section('title', 'Movies List')
@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>My Movie List</h2>
        <a href="{{ route('movies.create') }}" class="btn btn-primary">+Add Movies</a>
    </div>

    @php $selectedGenre = $genres->firstWhere('id', $genre_id); @endphp

    @if (!$genre_id && !$year)
        <p>Show all movies</p>
    @else
        <p>
            @if ($selectedGenre) Show movie filter by: {{ $selectedGenre->name }} @endif
            @if ($selectedGenre && $year) | @endif
            @if ($year) {{ $year }} @endif
        </p>
    @endif

    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <div class="mb-2">
                <strong>Filter by Genre:</strong>
                @foreach ($genres as $g)
                    <a href="{{ route('movies.index', ['genre_id' => $g->id, 'year' => $year]) }}" class="ms-2 text-decoration-none">{{ $g->name }}</a>
                    @if (!$loop->last) | @endif
                @endforeach
            </div>

            <div class="mb-3">
                <strong>Filter by Year:</strong>
                <a href="{{ route('movies.index', ['genre_id' => $genre_id, 'year' => '2000']) }}" class="ms-2 text-decoration-none">2000</a> |
                <a href="{{ route('movies.index', ['genre_id' => $genre_id, 'year' => '2003']) }}" class="text-decoration-none">2003</a> |
                <a href="{{ route('movies.index', ['genre_id' => $genre_id, 'year' => '2005']) }}" class="text-decoration-none">2005</a> |
                <a href="{{ route('movies.index', ['genre_id' => $genre_id, 'year' => '2010']) }}" class="text-decoration-none">2010</a> |
                <a href="{{ route('movies.index', ['genre_id' => $genre_id, 'year' => '2017']) }}" class="text-decoration-none">2017</a>
            </div>

            <a href="{{ route('movies.index') }}" class="btn btn-danger">Clear All Filters</a>

        </div>
    </div>

    <form method="GET" action="{{ route('movies.index') }}" class="row g-2 mb-3">
        <div class="col-sm-4">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by name">
        </div>
        <div class="col-sm-2">
            <select name="genre_id" class="form-select">
                <option value="">All genres</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}"
                        @selected(request('genre_id') == $genre->id)>{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <select name="is_blockbuster" class="form-select">
                <option value="">Any</option>
                <option value="1" @selected(request('is_blockbuster') === '1')>YES</option>
                <option value="0" @selected(request('is_blockbuster') === '0')>NO</option>
            </select>
            {{-- <select name="sort" class="form-select">
                <option value="name" @selected($sort === 'name')>Sort by name</option>
                <option value="rating" @selected($sort === 'rating')>Sort by rating</option>
            </select> --}}
        </div>

        <div class="col-sm-2" class="form-select">
            <select name="sort" class="form-select">
                <option value="title"  @selected(request('sort', 'title') === 'title')>Title</option>
                <option value="year"   @selected(request('sort') === 'year')>Year</option>
                <option value="rating" @selected(request('sort') === 'rating')>Rating</option>
            </select>
        </div>





        <div class="col-md-auto">
            <button class="btn btn-primary">Apply</button>
            <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary">Clear</a>
        </div>
    </form>


    <table class="table table-striped table-hover table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Year</th>
                <th>Blockbuster</th>
                <th>Director</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($movies as $movie)
            <tr @if($movie->year >= 2020) class="table-warning" @endif>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->genre->name }}</td>
                <td>{{ $movie->rating }}</td>
                <td>{{ $movie->year }}
                    @if($movie->year >= 2020)
                        <span>(Latest Movie)</span>
                    @endif
                </td>
                <td>{{ $movie->is_blockbuster ? 'Yes' : 'No' }}</td>
                <td>{{ $movie->director }}</td>
                <td>
                    <a href="{{ route('movies.show', $movie) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Delete this movie?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center text-danger">No movies available!</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $movies->links() }}
@endsection
