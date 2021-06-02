<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::get();
        return view('tareas/tareaIndex', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas/tareaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input('titulo'));

        /* Primer forma de guardar registros a la BD
        $tarea = new Tarea();
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->prioridad = $request->prioridad;
        $tarea->tipo = $request->tipo;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->save();     //el save implica que va a guardar los datos en la BD
        */

        //Estas dos formas funcionan si los nombres del formulario coinciden con los names de las columnas

        /* Segunda forma de guardar los datos a la BD
        $tarea = new Tarea($request->all());
        $tarea->save();
        */

        //Tercera forma de guardar los datos a la DB
        Tarea::create($request->all());

        /*Forma 1
        return redirect('/tarea');
        */

        //Forma 2
        return redirect()->route('tarea.index');

        /* Esta forma redirecciona a show, pasando de parámetro el ID de $tarea y mostrandi dicho registro
        $tarea = Tarea::create($request->all());
        return redirect()->route('tarea.show', $tarea);
        */

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //dd($tarea);
        return view('tareas/tareaShow', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
