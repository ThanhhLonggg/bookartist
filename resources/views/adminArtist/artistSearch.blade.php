@extends('layouts.app')

@section('content')
    <h1>Search Results for "{{ $searchTerm }}"</h1>

    @if ($artists->count() === 0)
        <p>No artists found.</p>
    @else
        <ul>
            @foreach ($artists as $artist)
                <li><a href="{{ route('artists.show', ['Name' => $artist->Name]) }}">{{ $artist->Name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection