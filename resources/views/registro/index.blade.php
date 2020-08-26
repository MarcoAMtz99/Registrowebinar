@extends('master')
@section('content')
    <h2>Todos los registros</h2>
    @if (session()->has('status'))
    <div class="alert alert-success">{{session('status')}}
            </div>
        @endif
   {{--  <a href=" {{route('posts.create')}}" class="btn btn-primary">Crear Nuevo post</a> --}}
    <table class="table table-bordered">
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>celular</th>
        <th>correo</th>
        <th>telefono</th>
        <th>empresa</th>
        <th>puesto</th>
        </tr>
       
    @foreach ($registro as $registros)
    <tr>
        <td>{{$registros->id}} </td>
        <td>{{$registros->nombre}} </td>
        <td>{{$registros->apellidos}} </td>
        <td>{{$registros->celular}} </td>
        <td>{{$registros->correo}} </td>
        <td>{{$registros->telefono}} </td>
        <td>{{$registros->empresa}} </td>
        <td>{{$registros->puesto}} </td>
       
    </tr>
    @endforeach
</table>
@endsection