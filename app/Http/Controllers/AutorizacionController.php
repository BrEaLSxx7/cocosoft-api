<?php

namespace App\Http\Controllers;

use App\Autorizacion;
use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AutorizacionController extends Controller {

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
//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autorizacion  $autorizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Autorizacion $autorizacion) {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autorizacion  $autorizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Autorizacion $autorizacion) {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autorizacion  $autorizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autorizacion $autorizacion) {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autorizacion  $autorizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autorizacion $autorizacion) {
//
    }

    public function auth(Request $request) {

        try {
            $auth = Autorizacion::where('usuario', $request->usuario)->firstOrFail();
            if (Hash::check($request->contrasena, $auth->contrasena)) {
                echo 'hola';
                try {
                    $data = Usuarios::where('id', $auth->id_usuario)->firstOrFail();
                    return response()->json(['token' => $auth->token, 'usuario' => $data->id_rol], 200);
                } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
                    return response()->json(['message' => 'Datos incorrectos'], 401);
                }
            } else {
                return response()->json(['message' => 'Datos incorrectos'], 401);
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            try {
                $auth = Autorizacion::where('correo', $request->usuario)->firstOrFail();
                if (Hash::check($request->contrasena, $auth->contrasena)) {
                    echo 'hola';
                    try {
                        $data = Usuarios::where('id', $auth->id_usuario)->firstOrFail();
                        return response()->json(['token' => $auth->token, 'usuario' => $data->id_rol], 200);
                    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
                        return response()->json(['message' => 'Datos incorrectos'], 401);
                    }
                } else {
                    return response()->json(['message' => 'Datos incorrectos'], 401);
                }
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
                return response()->json(['message' => 'Datos incorrectos'], 401);
            }
        }
    }

}
