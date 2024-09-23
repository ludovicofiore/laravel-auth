@extends('layouts.app')

@section('content')
    <div>

        <h2>{{ $projects->title }}</h2>

        <div>
            <img src="{{ $projects->cover_img }}" alt="{{ $projects->title }}">
        </div>

        <div>
            <h4>Descrizione</h4>
            <p>
                {{ $projects->description }}
            </p>

            <h4>Data di pubblicazione</h4>
            <p>
                {{ $projects->publication_date }}
            </p>



            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Torna indietro</a>
        </div>
    @endsection
