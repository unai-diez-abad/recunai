<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
class UsuarioControler extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('logings.login');
    }

    public function login(LoginRequest $request)
    {
       
        $validated = $request->validated();

        
        Auth::guard('usuario')->attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ]);


        if(Auth::guard('usuario')->user())
        {
            return redirect()->route('obra.inicio');
        }
        else{
            return redirect()->back()->withInput()->withErrors(['login_error' => 'La contraseña o el correo es incorrecto']);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('logings.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $user)
    {
        //exportado, para editar
        $validated = $user->validated();
        
        $st= User::create([
            'nombre'  => $validated['nombre'],
            'apellidos'=> $validated['apellidos'],
            'email'  =>$validated['email'],
            'password'  =>Hash::make($validated['password'])
        ]);
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('login');
    }
}
