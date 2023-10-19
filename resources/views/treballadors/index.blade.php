@extends('layouts.app')

@section('content')
    <h1>Llistat de Treballadors</h1>
    <ul>
        @foreach ($treballadors as $treballador)
            <li>
                {{ $treballador->Nom }} {{ $treballador->Cognom }}
                <a href="{{ route('treballadors.show', $treballador) }}">Detalls</a>
                <a href="{{ route('treballadors.edit', $treballador) }}">Editar</a>
                <form action="{{ route('treballadors.destroy', $treballador) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
        {{ $clients->links() }}
    </ul>
    <a href="{{ route('treballadors.create') }}">Afegir Treballador</a>
@endsection
