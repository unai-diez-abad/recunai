<?php

namespace App\Http\Controllers;

use App\Models\Solicitante;
use App\Http\Requests\SolicitanteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SolicitanteController extends Controller
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
    public function create()
    {
        return view('solicitante.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SolicitanteRequest $request)
    {   
        $validated = $request->validated();
        
        $st= Solicitante::create([
            'nombre'=>$validated['nombre'],
            'apellidos'=>$validated['apellidos'],
            'DNI'=>$validated['DNI'],
            'direcion_residencia'=>$validated['direcion_residencia'],
            'email'=> $validated['email'],
            'tel'=> $validated['tel'],
        ]);
        
        return redirect()->route('obra.inicio')->with('status', 'Solicitante creado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Solicitante $solicitante)
    {
        $Solicitantes=Solicitante::all();
        return view('solicitante.lista',['solicitantes'=>$Solicitantes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitante $solicitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SolicitanteRequest $request, Solicitante $solicitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitante $solicitante)
    {
        //
    }
}
