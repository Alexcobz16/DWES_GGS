<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Datos::paginate();
        return view('pruebasBD.db', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pruebasBD.formularioCrear'); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuario = DB::table('users')->where('id', Auth::user()->id)->first();

        $registro = new Datos();
        $registro->nombre = $request->nombre;
        $registro->apellidos = $request->apellidos;
        $registro->descripcion = $request->descripcion;
        $registro->id_creador = $usuario->id;
        $registro->save();
        
        return redirect()->route('db');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Datos::paginate();
        return view('pruebasBD.db', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Datos::find($id);
        return view('pruebasBD.formularioEditar', compact('registro')); 
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
        $usuario = DB::table('users')->where('id', Auth::user()->id)->first();
        $registro = Datos::find($id);

        $registro->nombre = $request->nombre;
        $registro->apellidos = $request->apellidos;
        $registro->descripcion = $request->descripcion;
        $registro->id_editor = $usuario->id;
        $registro->save();
        
        return redirect()->route('db');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Datos::find($id);
        $registro->delete();
        return redirect()->route('db');
    }
}
