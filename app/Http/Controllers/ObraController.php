<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use App\Models\Solicitante;
use App\Models\Comentario;
use App\Http\Requests\ObraRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obras=Obra::all();
       return view ('inicio',['obras'=>$obras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $solicitantes = Solicitante::all();
        return view ('obras.nuevaobra',['solicitantes'=>$solicitantes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObraRequest $request)
    {
        $validated = $request->validated();
        
        $st= Obra::create([
            'tipo_edificio'=> $validated['tipo_edificio'],
            'tipo_obra'=> $validated['tipo_obra'],
            'direcion'=> $validated['direcion'],
            'fecha_inicio'=> $validated['fecha_inicio'],
            'fecha_fin'=> $validated['fecha_fin'],
            'descripcion'=>  $validated['descripcion'],
            'solicitante_id'=> $validated['solicitante_id'],
        ]);



        return redirect()->route('obra.inicio')->with('status', 'Obra creado!');

    }

    /**
     * Display the specified resource.
     */
    public function show(obra $obra)
    {
        $obras=[];
        $listaobras=Obra::all();
       //Vista de notas
       foreach($listaobras as $unaobra)
       {
        $solicitante = Solicitante::whereId($unaobra->solicitante_id)->first();
              

           array_push($obras, [
                "id"=>$unaobra->id,
                "solicitante" => $solicitante->nombre,
                "edificio" => $unaobra->tipo_edificio,
                "obra" => $unaobra->tipo_obra,
                "fecha_inicio" => $unaobra->fecha_inicio,
                "fecha_fin" => $unaobra->fecha_fin
           ]);
       }
       return view ('obras.listaobra',['obras'=>$obras]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $obras=obra::find($id);
        $solicitantes = Solicitante::all();
        $unsolicitante = Solicitante::whereId($obras->solicitante_id)->first();
        $comentarios=Comentario::where('obra_id',$id)->get();
        return view ('obras.editarobra',['unsolicitante'=>$unsolicitante,'solicitantes'=>$solicitantes,'obra'=>$obras,'comentarios'=>$comentarios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ObraRequest $request,$id)
    {
        $validated = $request->validated();
       Obra::where('id',$id)->update([
        'tipo_edificio'=> $validated['tipo_edificio'],
        'tipo_obra'=> $validated['tipo_obra'],
        'direcion'=> $validated['direcion'],
        'fecha_inicio'=> $validated['fecha_inicio'],
        'fecha_fin'=> $validated['fecha_fin'],
        'descripcion'=>  $validated['descripcion'],
        'solicitante_id'=> $validated['solicitante_id'],
    ]);
        return redirect()->route('obra.inicio')->with('status', 'obra editado!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(obra $obra)
    {
        //
    }
}
