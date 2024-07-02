@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Dashboards</h1>
    {{--  <h2>Usuario: {{ $user->name }}</h2> --}}
    <h2>Usuario: {{ $user->name }}</h2>


    <form action="{{ route('auth.logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
@endsection
