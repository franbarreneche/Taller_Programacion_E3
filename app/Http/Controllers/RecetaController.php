<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    //devuelve todas las recetas
    function index() {
        $lista_recetas = Receta::all();
        return view('receta.index',["recetas" => $lista_recetas]);
    }
     
    //devuelve una sola receta
    function show($id) {
        $receta = Receta::find($id);
        return view('receta.show',["receta"=>$receta]);
    }

    //guarda una nueva receta
    function store(Request $request) {
        $receta = new Receta();
        $receta->nombre = $request->nombre;
        $receta->procedimiento = $request->procedimiento;
        $receta->costo_promedio = $request->costo_promedio;
        $receta->creador = $request->creador;
        $receta->fecha_creacion = date('d-m-y');
        $receta->save();
        return redirect('/recetas');
    }

   
}
