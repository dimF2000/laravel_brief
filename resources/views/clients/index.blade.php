@extends('layout')
@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724; padding: 0.75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: 0.25rem;">
            {{ session('success') }}
        </div>
    @endif

    <h1>Liste des clients</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom Prénom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>créé le</th>
                <th>Mis à jour le</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->npr }}</td>
                <td>{{ $client->adresse }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->created_at }}</td>
                <td>{{ $client->updated_at }}</td>
                <td>
                    <div class="action-buttons">
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-success btn-sm">Détails</a>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Ajouter un client</a>
</div>
@endsection