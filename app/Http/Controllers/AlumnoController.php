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
        $alumno =  Alumno::all();
        return $alumno;
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
        $nuevoAlumno = new Alumno;
        $nuevoAlumno->ID_GRADO =  $data['id_grado'];
        $nuevoAlumno->APELLIDO_ALUMNO =  $data['apellido'];
        $nuevoAlumno->NOMBRE_TUTOR =  $data['nombre_tutor'];
        $nuevoAlumno->DUI_TUTOR =  $data['dui_tutor'];
        $nuevoAlumno->DIRECCION_VIVIENDA =  $data['direccion'];
        $nuevoAlumno->CELULAR_TUTOR =  $data['celular'];
        $nuevoAlumno->FECHA_NACIMIENTO_ALUMNO =  $data['fecha_nacimiento'];
        $nuevoAlumno->NOMBRE_ALUMNO =  $data['nombre'];
        $nuevoAlumno->EDAD_ALUMNO =  $data['edad'];
        $nuevoAlumno->save();
        return $nuevoAlumno;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Alumno::find($id);
            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
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
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $alumno = Alumno::find($id);
            $alumno->ID_GRADO =  $data['id_grado'];
            $alumno->APELLIDO_ALUMNO =  $data['apellido'];
            $alumno->NOMBRE_TUTOR =  $data['nombre_tutor'];
            $alumno->DUI_TUTOR =  $data['dui_tutor'];
            $alumno->DIRECCION_VIVIENDA =  $data['direccion'];
            $alumno->CELULAR_TUTOR =  $data['celular'];
            $alumno->FECHA_NACIMIENTO_ALUMNO =  $data['fecha_nacimiento'];
            $alumno->NOMBRE_ALUMNO =  $data['nombre'];
            $alumno->EDAD_ALUMNO =  $data['edad'];
            $alumno->save();

            return $alumno;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
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
            Alumno::destroy($id);
            return 'ALUMNO ELIMINADO';
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }
}
