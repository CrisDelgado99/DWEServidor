<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;
use App\Http\Requests\EtiquetaRequest;
use App\Http\Resources\EtiquetaResource;


class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etiquetas = Etiqueta::all();
        return EtiquetaResource::collection($etiquetas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EtiquetaRequest $request)
    {
        $etiquetaNueva = new Etiqueta();
        $etiquetaNueva->nombre = $request->nombre;

        $etiquetaNueva->save();

        $tareas = $request->tareas;
        //Conseguimos el id de esta etiqueta que acabamos de crear
        $etiquetaId = $etiquetaNueva->id;
        $etiquetaNueva->tareas()->attach($tareas, ['etiquetas_id' => $etiquetaId]);

        return new EtiquetaResource($etiquetaNueva);
    }

    /**
     * Display the specified resource.
     */
    public function show($idEtiqueta)
    {
        $etiqueta = Etiqueta::find($idEtiqueta);
        return new EtiquetaResource($etiqueta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etiqueta $etiqueta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EtiquetaRequest $request, $idEtiqueta)
    {
        $etiquetaModif = Etiqueta::find($idEtiqueta);
        $etiquetaModif->nombre = $request->nombre;

        $etiquetaModif->tareas()->detach();
        $etiquetaModif->tareas()->attach($request->tareas);

        $etiquetaModif->save();

        return new EtiquetaResource($etiquetaModif);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idEtiqueta)
    {
        $etiquetaBorrar = Etiqueta::find($idEtiqueta);
        $etiquetaBorrar->delete();
        return response()->json(['success' => true], 200);
    }
}
