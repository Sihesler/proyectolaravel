@extends('templates.bootstrap')

@section('content')


<form class="form-horizontal" method="POST" action="{{ url('/estudiante/store')}}">
      {{ csrf_field() }}
      
<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label"> Nombre </label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="nombre" id="inputEmail" placeholder="nombre">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label"> Edad </label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="edad" id="inputEmail" placeholder="edad">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label">Fecha Nacimiento</label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="fecha" id="inputEmail" placeholder="fecha">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label">Dirección</label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="direccion" id="inputEmail" placeholder="direccion">
  </div>
</div>

<a href="{{ url('/listarestudiante') }}" class="btn btn-secondary" > Regresar </a> 
            <button type="submit" class="btn btn-primary"> Guardar </button>
</form>
@stop