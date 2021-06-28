@extends('welcome')

@section('content')
<a class="btn btn-success" style="float:right;" href="{{route('areas.create')}}">Nuevo</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
    @foreach($areas as $area)
        <tr>
            <th scope="row">{{$area->id}}</th>
            <td>{{$area->nombre}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@stop