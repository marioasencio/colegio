<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profesor;
use App\Grado;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$grados = Grado::all();
        $grados = DB::table('grado')->select('grado.id', 'grado.nombre', DB::raw("CONCAT(profesor.nombre, ' ', profesor.apellidos) as profesor"))
                ->join('profesor', 'grado.profesor_id', 'profesor.id')
                ->get();
        return view('admin.grado.index')->with('grados', $grados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$profesores = DB::table('profesor')->pluck('nombre', 'id');
        $profesores = Profesor::select(DB::raw("CONCAT(nombre,' ',apellidos) AS name"),'id')->pluck('name', 'id');
        return view('admin.grado.create')->with('profesores', $profesores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grado2 = Grado::select('nombre', 'profesor_id')->where('nombre',$request->nombre)->where('profesor_id',$request->profesor_id)->first();

        if($grado2){
            dd($grado2);
        }else{
            $grado = new Grado;
            $grado->nombre = $request->nombre;
            $grado->profesor_id = $request->profesor_id;
        
            $grado->save();

            return redirect()->route('grado.index');
        }
        
        
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
        $profesores = Profesor::select(DB::raw("CONCAT(nombre,' ',apellidos) AS name"),'id')->pluck('name', 'id');
        $grado = Grado::find($id);
        return view('admin.grado.edit')->with(compact('profesores', 'grado'));
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
        $grado = Grado::find($id);
        $grado->nombre = $request->nombre;
        $grado->profesor_id = $request->profesor_id;

        $grado->save();

        return redirect()->route('grado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grado = Grado::find($id);
        $grado->delete();

        return redirect()->route('grado.index');
    }
}
