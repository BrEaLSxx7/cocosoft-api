<?php

namespace App\Http\Controllers;

use App\Tipo_Documento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return response()->json(Tipo_Documento::all(), 200);
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
     * @param  \App\Tipo_Documento  $tipo_Documento
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Documento $tipo_Documento) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo_Documento  $tipo_Documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Documento $tipo_Documento) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo_Documento  $tipo_Documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_Documento $tipo_Documento) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo_Documento  $tipo_Documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Documento $tipo_Documento) {
        //
    }

}
