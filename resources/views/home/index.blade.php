@extends('layouts.app-master')

@section('content')

    <h1>Home</h1>
    @auth
        <p>Bienvenido {{ auth()->user()->name }} esta auntenticado</p>
        <p><a href="/logout">Logout</a></p>
    @endauth

    @guest
        <p>Inicia sesion porfavor <a href="/login">Iniciar</a></p>
    @endguest

@endsection
