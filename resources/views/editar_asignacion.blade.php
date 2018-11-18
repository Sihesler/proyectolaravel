@extends('templates.bootstrap')

@section('content')

<h1> Editar Asignacion </h1>
<form class="form-horizontal" method="POST" action='#'>
      {{ csrf_field() }}

<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label">Estudiante</label> 
  <div class="col-lg-10">
    <input type="text" value="#" class="form-control" name="estudiante" id="inputEmail" placeholder="estudiante">
  </div>
</div>




<a href="{{ url('/listarasignacion') }}" class="btn btn-secondary" > Regresar </a> 
            <button type="submit" class="btn btn-primary"> Guardar </button>
</form>
@stop