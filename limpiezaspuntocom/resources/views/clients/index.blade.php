@extends('layouts.app')

@section('content')
    <h1>Client List</h1>
    <a href="{{ route('clients.create') }}">Add New Client</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Telefon</th>
                <th>Correu</th>
                <th>Adreça</th>
                <th>DNI</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->ClientID }}</td>
                    <td>{{ $client->Nom }}</td>
                    <td>{{ $client->Cognom }}</td>
                    <td>{{ $client->Telefon }}</td>
                    <td>{{ $client->Correu }}</td>
                    <td>{{ $client->Adreça }}</td>
                    <td>{{ $client->DNI }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client) }}">Mostrar</a>
                        <a href="{{ route('clients.edit', $client) }}">Edita</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
