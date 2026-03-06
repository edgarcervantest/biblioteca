@extends('layouts.user')

@section('content')

    <h1 class="title_text">Bienvenido {{auth()->user()->name}}</h1>

@endsection