@extends('layouts.app')

@section('content')
    <h1>Client List</h1>
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
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->ID }}</td>
                    <td>{{ $client->Nom }}</td>
                    <td>{{ $client->Cognom }}</td>
                    <td>{{ $client->Telefon }}</td>
                    <td>{{ $client->Correu }}</td>
                    <td>{{ $client->Adreça }}</td>
                    <td>{{ $client->DNI }}</td>
                    <td>
                        <a href="{{ route('clients.show', ['clients' => $clients->ID]) }}">Mostrar</a>
                        <a href="{{ route('clients.edit', ['clients' => $clients->ID]) }}">Edita</a>
                    </td>
                </tr>
            @endforeach
            {{ $clients->links() }}
        </tbody>
    </table>
@endsection
