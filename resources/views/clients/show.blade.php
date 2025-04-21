@extends('layout')
@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Détails client</h1>
            <a href="{{ route('clients.index') }}" class="btn btn-primary mb-4">Retour</a>

            <div class="mb-3">
                <strong>ID</strong> {{ $client->id }}
            </div>

            <div class="mb-3">
                <strong>Nom et prénom</strong> {{ $client->npr }}
            </div>

            <div class="mb-3">
                <strong>Adresse</strong> {{ $client->adresse }}
            </div>

            <div class="mb-3">
                <strong>Email</strong> {{ $client->email }}
            </div>

            <div class="mb-3">
                <strong>Créé le</strong> {{ $client->created_at }}
            </div>

            <div class="mb-3">
                <strong>Modifié le</strong> {{ $client->updated_at }}
            </div>
        </div>
    </div>
</div>
@endsection