<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB; ---> este es para usar DB::table
use App\Models\Tarea;

use Illuminate\Http\Request;

/** CRUD
     * Listado -> index
     * Form creación -> create
     * Guardar a DB -> store
     * ver detalle -> show
     * Form editar -> edit
     * Guardar cambios a DB -> update
     * Eliminar -> delete
     */

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Con DB::table se le menciona en qué tabla estamos trabajando
        //$tareas = DB::table('tareas')->get(); //Equivalente a SELECT * FROM tareas pero mediante QueryBuilder;
        //dd($tareas);                          //Se usa el get() para traer la información de la tabla
        $tareas = Tarea::get();
        //$tareas = Tarea::where('id', 1)->get();   //se puede usar all() o get() para traer todos los registros
                                                    //se puede poner el where() para traer registros específicos
                                                    //where('columna', 'parámetro', 'parámetro')
        //$tareas = Tarea::where('id', '!=',1)->get();
        //$tareas = Tarea::where('titulo', 'like', 'Prueba%')->get();
        //$tareas = Tarea::where('titulo', 'like', 'Prueba%')->where('id', 1)->get();   //se pueden concatenar
                                                                                        //los where
        return view('tareas/tareaIndex', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
