<?php

namespace ControlCitas\Http\Controllers;

use ControlCitas\agendas;
use Illuminate\Http\Request;
use App;

class AgendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $historial = \DB::table('cita')->where('DocuUsuario',$id);
        $historial = $historial->get();
        return view('citas.agenda',compact('historial'));
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
     * @param  \ControlCitas\agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function show(agendas $agendas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ControlCitas\agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function edit(agendas $agendas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ControlCitas\agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agendas $agendas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ControlCitas\agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function destroy(agendas $agendas)
    {
        //
    }
}
