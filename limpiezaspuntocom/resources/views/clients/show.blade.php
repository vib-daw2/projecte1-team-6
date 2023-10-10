@extends('layouts.app')

@section('content')
    <h1>Detalls del Client</h1>
    <p>ID: {{ $client->ClientID }}</p>
    <p>Nom: {{ $client->Nom }}</p>
    <p>Cognom: {{ $client->Cognom }}</p>
    <p>Telefon: {{ $client->Telefon }}</p>
    <p>Correu: {{ $client->Correu }}</p>
    <p>Adreça: {{ $client->Adreça }}</p>
    <p>DNI: {{ $client->DNI }}</p>
    <h2>Serveis Associats</h2>
    <ul>
        @forelse($client->serveis as $servei)
            <li>
                Servei ID: {{ $servei->ID }}, Data d'Inici: {{ $servei->DataInici }}, 
                Data de Fi: {{ $servei->DataFi }}, Tipus de Servei: {{ $servei->TipusDeServei }}
            </li>
        @empty
            <li>No hi ha serveis associats a aquest client.</li>
        @endforelse
    </ul>
@endsection
