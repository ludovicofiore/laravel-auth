@extends('layouts.app')

@section('content')
    <h3>Elenco progetti</h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Data di pubblicazione</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th>{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->publication_date }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project->id) }}">Mostra</a>
                        <a href="#">Modifica</a>
                        <a href="#">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $projects->links() }}
@endsection
