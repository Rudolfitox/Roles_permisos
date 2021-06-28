@extends('welcome')

@section('content')
<a class="btn btn-success" style="float:right;" href="{{route('permisos.create')}}">Nuevo</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($roles as $rol)
        <tr>
            <th scope="row">{{$rol->id}}</th>
            <td>{{$rol->titulo}}</td>
            <td>
                <form action="{{route('permisos.edit',$rol->id)}}">
                    <button class="btn btn-success">Editar</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@stop