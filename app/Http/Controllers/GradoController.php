<?php

namespace App\Http\Controllers;

use App\Grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grado =  Grado::all();
        return view('grados.index', ['grados' => $grado]);
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
        $data = $request->all();
        $nuevoGrado = new Grado;
        $nuevoGrado->ID_ANO =  $data['id_ano'];
        $nuevoGrado->NOMBRE_GRADO =  $data['nombre_grado'];
        $nuevoGrado->SECCION =  $data['seccion'];
        $nuevoGrado->save();
        return $nuevoGrado;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Grado::find($id);
            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function edit(Grado $grado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $grado = Grado::find($id);
            $grado->ID_ANO =  $data['id_ano'];
            $grado->NOMBRE_GRADO =  $data['nombre_grado'];
            $grado->SECCION =  $data['seccion'];
            $grado->save();

            return $grado;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Grado::destroy($id);
            return 'GRADO ELIMINADO';
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }
}
