<?php

namespace App\Http\Controllers;

use App\Publicaciones;
use Illuminate\Http\Request;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $titulo,string $cuerpo, int $persona_id){

        $newinfo = new Publicaciones;

        $newinfo->titulo = $titulo;
        $newinfo->cuerpo = $cuerpo;
        $newinfo->persona_id = $persona_id;


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
     * @param  \App\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function showme(Publicaciones $publicaciones, int $id=0)
    {
        $publicaciones = ($id==0)? Publicaciones::all():Publicaciones::find($id);
        return response()->json($publicaciones, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicaciones $publicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function updatetitulo(int $id,string $titulo)
    {
        $update= Publicaciones::find($id);
        $update->titulo=$titulo;
        $update->save();
        return response()->json(["Update Finish"=>Publicaciones::find($update->id)],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Publicaciones::destroy($id);
        return response()->json('delete',200);

    }
}
