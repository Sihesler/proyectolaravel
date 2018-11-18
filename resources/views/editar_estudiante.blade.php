@extends('templates.bootstrap')

@section('content')


<form class="form-horizontal" method="POST" action='{{ url("/estudiante/update/{$estudiante->idestudiante}")}}'>
      {{ csrf_field() }}

<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label">Nombre estudiante</label> 
  <div class="col-lg-10">
    <input type="text" value="{{ $estudiante->nombre}}" class="form-control" name="nombre" id="inputEmail" placeholder="Nombre estudiante">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label"> Edad </label>
  <div class="col-lg-10">
    <input type="text" value="{{ $estudiante->edad}}" class="form-control" name="edad" id="inputEmail" placeholder="Edad">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label">Fecha Nacimiento</label>
  <div class="col-lg-10">
    <input type="text" value="{{ $estudiante->fecha_nacimiento}}" class="form-control" name="fecha" id="inputEmail" placeholder="Fecha">
  </div>
</div>


<div class="form-group">
  <label for="inputEmail" class="col-lg-2 control-label">Dirección</label>
  <div class="col-lg-10">
    <input type="text" value="{{ $estudiante->direccion}}" class="form-control" name="direccion" id="inputEmail" placeholder="direccion">
  </div>
</div>



<a href="{{ url('/listarestudiante') }}" class="btn btn-secondary" > Regresar </a> 
            <button type="submit" class="btn btn-primary"> Guardar </button>
</form>
@stop