@extends('templates.bootstrap')

@section('content')

<h1> Listar Asignaciones</h1>

<table class="table table-striped table-hover ">
  <a href="{{ url('/asignacioncreate') }}" class="btn btn-primary" > Nuevo </a> 
  <thead>
    <tr>
      <th>ID</th>
      <th> Estudiante </th>
      <th> Curso </th>   

     
    </tr>
  </thead>
  <tbody>
      @if(count($asignaciones)>0)
        @foreach($asignaciones->all() as $asignacion)
      <tr>
        <td>{{$asignacion->idasignacion}}</td>
        <td>{{$asignacion->estudiante_idestudiante}}</td>


        <td>
          <li>{{$asignacion->curso_idcurso}}</li>
        </td>   


        <td> 
          <a class="btn btn-secondary" href='{{ url("/asignacionedit{$asignacion->idasignacion}") }}'> Editar </a>
          <a class="btn btn-danger" href='{{ url("/asignacion/delete/{$asignacion->idasignacion}") }}'> Eliminar </a>
        </td>

    </tr>

        @endforeach
      @endif  
    
    
  </tbody>
</table> 

@stop