<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\AnioEscolar;
use Illuminate\Http\Request;

class AlumnoController extends Controller
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
        try {
            //code..

            $estadoItem = AnioEscolar::updateOrCreate(
                ['id' => $request->id],
                [
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion,
                    'id_gd_acuerdo_catalogo' => $request->id_gd_acuerdo_catalogo,
                ]
            );
            return back()->with("notificacion", ['icon' => 'success', 'title' => 'Done...', 'text' => 'Elemento Agregado']);
        } catch (\Exception $e) {
            return back()->with("notificacion", ['icon' => 'error', 'title' => 'No se pudo crear el recurso', 'text' => 'Error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            AnioEscolar::destroy($id);
            return back()->with("notificacion", ['icon' => 'success', 'title' => 'Eliminado...', 'text' => 'Elemento elimiando']);
        } catch (\Exception $e) {
            return back()->with("notificacion", ['icon' => 'error', 'title' => 'No se pudo eliminar', 'text' => 'Error al eliminar']);
        }
    }
}
