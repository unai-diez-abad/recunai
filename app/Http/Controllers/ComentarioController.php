<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Http\Requests\ComentarioRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view ('comentarios.nuevocomentario',['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComentarioRequest $request)
    {
        $validated = $request->validated();
        
        $st= Comentario::create([
            'fecha_inicio'=> $validated['fecha_inicio'],
            'usuario_id'=> $validated['usuario_id'],
            'texto'=>  $validated['texto'],
            'obra_id'=> $validated['obra_id'],
        ]);
        
        return redirect()->route('comentario.show',['id'=>$validated['obra_id']]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $listacomentario=Comentario::where('obra_id',$id)->get();
        $comentarios=[];
       foreach($listacomentario as $uncomentario)
       {
        $user = User::whereId($uncomentario->usuario_id)->first();
           array_push($comentarios, [
                "fecha_inicio"=>$uncomentario->fecha_inicio,
                "autor" => $user->nombre,
                "texto" => $uncomentario->texto,
           ]);
       }
       //Vista de lista de una obra
       
       return view ('comentarios.listacomentarios',['comentarios'=>$comentarios,'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
