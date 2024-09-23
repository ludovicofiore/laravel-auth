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
                        <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->id) }}">Mostra</a>
                        <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->id) }}">Modifica</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="post"
                            onsubmit="return confirm('Sei sicuro di voler eliminare {{ $project->title }}?')">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">Elimina</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $projects->links() }}
@endsection
