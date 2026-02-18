@extends('layouts.admin')
@section('content')

    <h1>Categorias</h1>
    <ul>
        @foreach ($categorias as $categoria)
            <li>
                <a href="{{ route('categorias.show', $categoria) }}">{{ $categoria->nombre }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('categorias.index') }}">Create Category</a>
@endsection