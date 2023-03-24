@extends('layouts.app-master')

@section('content')

    <h1>Home</h1>
    @auth
        <p>Bienvenido {{ auth()->user()->name }} esta auntenticado</p>
        <form action="{{ route('uploads') }}" class='m-auto w-50 mt-2 mb-2' method='POST' enctype='multipart/form-data'>
           @csrf
            <div class='mb-2'>
                <label class='form-label'>Nombre del archivo</label>
                <input class='form-control form-control-sm' type="text" name='name'>
            </div>
            <div class='mb-2'>
                <label class='form-label'>Descripcion</label>
                <input class='form-control form-control-sm' type="text" name='description'> 
            </div>
            <div class='mb-2'>
                <label class='form-label'>Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name='file_path'> 
            </div>
            <div class='mb-2'>
            <select name="status">
                <option value="Bajo">Bajo</option>
                <option value="Medio">Medio</option>
                <option value="Alto">Alto</option>
            </select>

            </div>

            <button class='btn btn-primary btn-sm'>Subir archivo</button>
        </form>
        <table class='table table-sm table-striped'>
            <thead class='table-dark'>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Archivo</th>
                    <th>status</th>

                </tr>
            </thead>
            <tbody>
                @foreach($documents as $item)
   
                <tr>
                    <th>{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->file_path}}</td>
                    <td>{{$item->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endauth

    @guest
        <p>Inicia sesion porfavor <a href="/login">Iniciar</a></p>
    @endguest

@endsection
