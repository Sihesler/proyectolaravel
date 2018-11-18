@extends('templates.bootstrap')

@section('content')


<table class="table table-striped table-hover ">
  <h1>Lista de Cursos</h1>
  <a href="{{ url('/cursocreate') }}" class="btn btn-primary" > Nuevo </a> 
  <thead>
    <tr>
      <th>ID</th>
      <th> Materia </th>
      <th> Profesor </th>
      <th> Hora </th>    

     
    </tr>
  </thead>
  <tbody>
      @if(count($cursos)>0)
        @foreach($cursos->all() as $curso)
      <tr>    
        <td>{{$curso->idcurso}}</td>
        <td>{{$curso->materia}}</td>
        <td>{{$curso->profesor}}</td>
        <td>{{$curso->hora}}</td>   


        <td> 
          <a class="btn btn-secondary" href='{{ url("/cursoedit{$curso->idcurso}") }}'> Editar </a>
          <a class="btn btn-danger" href='{{ url("/curso/delete/{$curso->idcurso}") }}'> Eliminar </a>
        </td>

    </tr>

        @endforeach
      @endif  
    
    
  </tbody>
</table> 

@stop