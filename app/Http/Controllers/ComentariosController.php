<?php

namespace App\Http\Controllers;

use App\Comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $titulo,string $cuerpo, int $publicacion_id){

        $newinfo = new Comentarios;

        $newinfo->titulo = $titulo;
        $newinfo->cuerpo = $cuerpo;
        $newinfo->publicacion_id = $publicacion_id;


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
     * @param  \App\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function show(Comentarios $comentarios, int $id=0)
    {
        $comentarios = ($id==0)? Comentarios::all():Comentarios::find($id);
        return response()->json($comentarios, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentarios $comentarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function updatetitulo(int $id,string $titulo)
    {
        $update= Comentarios::find($id);
        $update->titulo=$titulo;
        $update->save();
        return response()->json(["Update Finish"=>Comentarios::find($update->id)],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Comentarios::destroy($id);
        return response()->json('delete',200);

    }
}
