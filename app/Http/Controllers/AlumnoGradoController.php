<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alumno;
use App\Grado;
use App\AlumnoGrado;

class AlumnoGradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignados = DB::table('alumno_grado')->select('alumno_grado.id', 
                    DB::raw("CONCAT(alumno.nombre, ' ', alumno.apellidos) as alumno"), 
                    'grado.nombre as grado', 
                    'alumno_grado.seccion')
                ->join('alumno', 'alumno_grado.alumno_id', 'alumno.id')
                ->join('grado', 'alumno_grado.grado_id', 'grado.id')
                ->get();
        return view('admin.alumnogrado.index')->with('asignados', $asignados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = Alumno::select(DB::raw("CONCAT(nombre,' ',apellidos) AS nombre"),'id')->pluck('nombre', 'id');
        $grado = Grado::select('nombre','id')->pluck('nombre', 'id');

        return view('admin.alumnogrado.create')->with(compact('alumno', 'grado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumnogrado = new AlumnoGrado;
        $alumnogrado->alumno_id = $request->alumno_id;
        $alumnogrado->grado_id = $request->grado_id;
        $alumnogrado->seccion = $request->seccion;
        
        $alumnogrado->save();

        return redirect()->route('alumnogrado.index');
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
        $grado = Grado::select('nombre','id')->pluck('nombre', 'id');
        $alumno = Alumno::select(DB::raw("CONCAT(nombre,' ',apellidos) AS nombre"),'id')->pluck('nombre', 'id');
        $asignacion = AlumnoGrado::find($id);
        
        return view('admin.alumnogrado.edit')->with(compact('grado', 'alumno', 'asignacion'));
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
        $asignacion = AlumnoGrado::find($id);
        $asignacion->alumno_id = $request->alumno_id;
        $asignacion->grado_id = $request->grado_id;
        $asignacion->seccion = $request->seccion;

        $asignacion->save();

        return redirect()->route('alumnogrado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumnogrado = AlumnoGrado::find($id);
        $alumnogrado->delete();

        return redirect()->route('alumnogrado.index');
    }
}
