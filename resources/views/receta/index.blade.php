@extends('layout.mainlayout')
@section('content')
<section>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Lista de Recetas</h2>
          <p class="lead">A conitunación le mostramos una lista cuarda de las mejores recetas de comida alemana.</p>
          <ul>
            @foreach($recetas as $receta)
            <li><a href="recetas/{{$receta->id}}">{{$receta->nombre}}</a></li>
            @endforeach
          </ul>
          <a href="/recetas/create" class="btn btn-primary">Agregar</a>
        </div>
      </div>
    </div>
</section>
@endsection