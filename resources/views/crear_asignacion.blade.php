@extends('templates.bootstrap')

@section('content')


<form class="form-horizontal" method="POST" action="{{ url('/asignacion/store')}}">
      {{ csrf_field() }}
      
<h1>Crear Asignación</h1>

  <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Estudiante</label>
      <div class="col-lg-10">
        <select name="idestudiante" id="idestudiante" class="form-control"> 
          <option value=""> Elija el curso </option>
          @foreach($estudiantes as $estudiante)
          <option value="{{$estudiante['idestudiante']}}">{{$estudiante['nombre']}} </option>
          @endforeach
        </select>
      </div>
  </div>



          Asigne los cursos:<br>
  @foreach($cursos as $curso)
  <input type="checkbox" class="form" name="checkbox[]"  value="{{ $curso->idcurso }}">{{ $curso->materia }}<br>
  @endforeach



<a href="{{ url('/listarasignacion') }}" class="btn btn-secondary" > Regresar </a> 
            <button type="submit" class="btn btn-primary"> Guardar </button>
</form>
@stop