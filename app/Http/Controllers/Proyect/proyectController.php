<?php

namespace App\Http\Controllers\Proyect;

use App\Models\Proyect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class proyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyect = Proyect::query()->get();


        return response()->json($proyect);
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
        $proyect = Proyect::create([
            'nombre_cliente'           =>   $request->nombre_cliente,
            'fecha_inicio'           => $request->fecha_inicio,
            'lenguaje_programacion' => $request->lenguaje_programacion,
            'duracion_estimada' => $request->duracion_estimada,
            'proyect_manager'         => $request->proyect_manager,
            'observaciones'            => $request->observaciones,
        ]);
        return response()->json('se ha creado correctamente el regitro');

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
