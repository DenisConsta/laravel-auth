@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <img src=" {{asset('storage/' . $project->cover_image) ?? $project->cover_image   }} " class="card-img-top"
            alt=" {{ $project->name }}">

        {{-- @if ($project->cover_image)
            <div>
                <img width="" src="{{ asset('storage/' . $project->cover_image) }}"
                    alt="{{ $project->original_cover_image }}">
                <div><i>{{ $project->original_cover_image }}</i></div>
            </div>
        @endif

        <img src="{{ $project->cover_image }}" alt="{{ $project->name }}"> --}}

        <div class="card-body">
            <h5 class="card-title"> {{ $project->name }}</h5>
            <h5>{{ $project->client_name }}</h5>
            <p class="card-text"> {{ $project->summary }}.</p>
        </div>
    </div>
@endsection
