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
        //
        $tareas = Tarea::all();
        return view('tarea.index',compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tarea.create');
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
        $datosTarea = request()->except('_token');

        Tarea::insert($datosTarea);
        
        $tareas = Tarea::all();
        return view('tarea.index',compact('tareas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $tareas = Tarea::all();
        return view('tarea.show',compact('tareas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tarea=Tarea::findOrFail($id);
        return view('tarea.edit',compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosTarea = request()->except('_token','_method');
        
        Tarea::where('id','=',$id)->update($datosTarea);

        $tarea=Tarea::findOrFail($id);
        $tareas = Tarea::all();
        return view('tarea.index',compact('tareas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Tarea::destroy($id);
        $tareas = Tarea::all();
        return view('tarea.index',compact('tareas'));
    }
}
