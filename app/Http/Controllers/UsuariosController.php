<?php

namespace App\Http\Controllers;

use App\Usuarios;
use App\Autorizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if ($request->hasFile('foto')) {
            $nameImagen = time() . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('./../imagenes', $nameImagen);
            $user = new Usuarios();
            $user->nombre = $request->nombre;
            $user->foto = 'uploadImages/' . $nameImagen;
            $user->numero_documento = $request->numero_documento;
            $user->correo = $request->correo;
            $user->id_tipo_documento = $request->id_tipo_documento;
            $user->id_sucursal = $request->id_sucursal;
            $user->id_rol = $request->id_rol;
            if ($user->save()) {
                $auth = new Autorizacion();
                $auth->usuario = $request->numero_documento;
                $auth->correo = $request->correo;
                $auth->contrasena = Hash::make($request->numero_documento);
                $auth->token = str_random(60);
                $auth->id_usuario = $user->id;
                if ($auth->save()) {
                    return response()->json(['message' => 'se agregó correctamente'], 200);
                } else {
                    return response()->json(['message' => 'ocurrió un error'], 500);
                }
            } else {
                return response()->json(['message' => 'ocurrió un error'], 500);
            }
        } else {
            return response()->json(['message' => 'falta la foto'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios) {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios) {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios) {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios) {
//
    }

}
