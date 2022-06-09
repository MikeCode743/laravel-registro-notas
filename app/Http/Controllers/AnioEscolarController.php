<?php

namespace App\Http\Controllers;

use App\AnioEscolar;
use Illuminate\Http\Request;

class AnioEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolar =  AnioEscolar::all();
        return $escolar;
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
        $nuevoAnioEscolar = new AnioEscolar;
        $nuevoAnioEscolar->FECHA_INICIO =  $data['fecha_inicio'];
        $nuevoAnioEscolar->FECHA_FIN =  $data['fecha_fin'];
        $nuevoAnioEscolar->save();
        return $nuevoAnioEscolar;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnioEscolar  $anioEscolar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = AnioEscolar::find($id);
            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnioEscolar  $anioEscolar
     * @return \Illuminate\Http\Response
     */
    public function edit(AnioEscolar $anioEscolar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnioEscolar  $anioEscolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {
            $data = $request->all();
            $anioEscolar = AnioEscolar::find($id);
            $anioEscolar->FECHA_INICIO = $data['fecha_inicio'];
            $anioEscolar->FECHA_FIN = $data['fecha_fin'];
            $anioEscolar->save();

            return $anioEscolar;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnioEscolar  $anioEscolar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            AnioEscolar::destroy($id);
            return 'AÑO ESCOLAR ELIMINADO';
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }
}
