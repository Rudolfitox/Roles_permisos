@extends('welcome')

@section('content')
<a class="btn btn-success" style="float:right;" href="{{route('subareas.create')}}">Nuevo</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
    @foreach($subareas as $subarea)
        <tr>
            <th scope="row">{{$subarea->id}}</th>
            <td>{{$subarea->nombre}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@stop