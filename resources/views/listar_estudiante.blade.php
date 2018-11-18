@extends('templates.bootstrap')

@section('content')


<table class="table table-striped table-hover ">

  <h1>Lista de Estudiantes</h1>

  <a href="{{ url('/estudiantecreate') }}" class="btn btn-primary" > Nuevo </a> 
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre </th>
      <th>Edad</th>
      <th>Fecha de Nacimiento</th>
      <th>Direccion</th>
          

   
    
    </tr>
  </thead>
  <tbody>
      @if(count($estudiantes)>0)
        @foreach($estudiantes->all() as $estudiante)
      <tr>    
        <td>{{$estudiante->idestudiante}}</td>
        <td>{{$estudiante->nombre}}</td>
        <td>{{$estudiante->edad}}</td>
        <td>{{$estudiante->fecha_nacimiento}}</td>
        <td>{{$estudiante->direccion}}</td>      



        <td> 
          <a class="btn btn-secondary" href='{{ url("/estudianteedit{$estudiante->idestudiante}") }}'> Editar </a>
          <a class="btn btn-danger" href='{{ url("/estudiante/delete/{$estudiante->idestudiante}") }}'> Eliminar </a>
        </td>

    </tr>

        @endforeach
      @endif  
    
    
  </tbody>
</table> 

@stop