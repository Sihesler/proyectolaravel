@extends('templates.bootstrap')

@section('content')


<form class="form-horizontal" method="POST" action="{{ url('/curso/store')}}">
      {{ csrf_field() }}
      
      <h1>Nuevo Curso</h1>
<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label"> Materia </label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="materia" id="inputEmail" placeholder="materia">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label"> Profesor </label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="profesor" id="inputEmail" placeholder="profesor">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label"> Hora </label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="hora" id="inputEmail" placeholder="hora">
  </div>
</div>




<a href="{{ url('/listarcurso') }}" class="btn btn-secondary" > Regresar </a> 
            <button type="submit" class="btn btn-primary"> Guardar </button>
</form>
@stop