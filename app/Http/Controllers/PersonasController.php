<?php

namespace App\Http\Controllers;

use App\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $nombre,string $apellido, int $edad, string $sexo ){

        $newinfo = new Personas;

        $newinfo->nombre = $nombre;
        $newinfo->apellido = $apellido;
        $newinfo->edad = $edad;
        $newinfo->sexo = $sexo;


        $newinfo->save();
        return response()->json('Finalizado', 200);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas, int $id=0)
    {
        $personas = ($id==0)? Personas::all():Personas::find($id);
        return response()->json($personas, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function updatenombre(int $id,string $nombre)
    {
        $update= Personas::find($id);
        $update->nombre=$nombre;
        $update->save();
        return response()->json(["Update Finish"=>Personas::find($update->id)],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Personas::destroy($id);
        return response()->json('delete',200);

    }
}
