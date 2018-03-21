<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view('admin.profesor.index')->with('profesores', $profesores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesor = new Profesor;
        $profesor->nombre = $request->nombre;
        $profesor->apellidos = $request->apellidos;
        $profesor->genero = $request->genero;

        $profesor->save();

        return redirect()->route('profesor.index');
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
        $profesor = Profesor::find($id);
        return view('admin.profesor.edit')->with('profesor',$profesor);
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
        $profesor = Profesor::find($id);
        $profesor->nombre = $request->nombre;
        $profesor->apellidos = $request->apellidos;
        $profesor->genero = $request->genero;

        $profesor->save();

        return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function eliminar($id){
        $profesor = Profesor::find($id);
        $profesor->delete();

        return redirect()->route('profesor.index');
    }
}
