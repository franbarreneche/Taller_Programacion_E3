@extends('layout.mainlayout')
@section('content')
<section>
  <div class="container">
      <div class="col text-center">
        <div class="col-lg-8 mx-auto">
          <div>Costo Promedio: <span class="badge badge-warning">${{$receta->costo_promedio}}</span></div>
          <h2>Receta de {{$receta->nombre}}</h2>
          <div>
          <p class="lead">Se hace con lo siguiente:</p>
          <p>{{$receta->procedimiento}}</p> 
          <p class="text-muted">Autor: {{$receta->creador}}</p>
          <p class="text-muted"><em>{{$receta->fecha_creacion}}</em></p>
          </div>
        </div>
        <a href="..\">Volver</a>
      </div>
    </div>
</section>
@endsection