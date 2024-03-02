<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Resources\TareaResource;
use App\Http\Requests\TareaRequest;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::all();
        return TareaResource::collection($tareas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(TareaRequest $request)
    {
        $tareaNueva = new Tarea();
        $tareaNueva->titulo = $request->titulo;
        $tareaNueva->descripcion = $request->descripcion;

        $tareaNueva->save();

        $etiquetas = $request->etiquetas;
        $tareaId = $tareaNueva->id;
        $tareaNueva->etiquetas()->attach($etiquetas, ['tareas_id' => $tareaId]);

        return new TareaResource($tareaNueva);
    }


    /**
     * Display the specified resource.
     */
    public function show($idTarea)
    {
        $tarea = Tarea::find($idTarea);
        return new TareaResource($tarea);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TareaRequest $request, $idTarea)
    {
        $tareaModif = Tarea::find($idTarea);
        $tareaModif->titulo = $request->titulo;
        $tareaModif->descripcion = $request->descripcion;

        $tareaModif->etiquetas()->detach();
        $tareaModif->etiquetas()->attach($request->etiquetas);

        $tareaModif->save();

        return new TareaResource($tareaModif);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idTarea)
    {
        $tareaBorrar = Tarea::find($idTarea);
        $tareaBorrar->delete();
        return response()->json(['success' => true], 200);
    }
}
