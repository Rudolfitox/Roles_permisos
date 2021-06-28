@extends('welcome')

@section('content')
    <form action="{{route('permisos.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" name="nombre"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        @foreach($permisos as $permiso)      
            <label for="">{{$permiso->nombre}}</label>
            <input type="checkbox" value="{{$permiso->id}}"  @if(in_array($permiso->id,$roles_key)) checked @endif>
        @endforeach
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form>
@stop