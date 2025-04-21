@extends('layout')
@section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h2 class="mb-4">Modifier le client</h2>
        
        <form method="POST" action="{{ route('clients.update', $client->id) }}">
            @csrf
            @method('PATCH')
            
            <div class="mb-4">
                <label for="npr" class="form-label">Nom et prénom :</label>
                <input type="text" class="form-control" id="npr" name="npr" value="{{ $client->npr }}" style="background-color: white;">
            </div>

            <div class="mb-4">
                <label for="adresse" class="form-label">Adresse :</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $client->adresse }}" style="background-color: white;">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}" style="background-color: #f8f9fa;">
            </div>

            <button type="submit" class="btn btn-primary px-4">Modifier</button>
        </form>
    </div>
</div>
@endsection