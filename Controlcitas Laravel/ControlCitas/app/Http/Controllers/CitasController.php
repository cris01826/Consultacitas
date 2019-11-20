<?php

namespace ControlCitas\Http\Controllers;

use ControlCitas\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = \DB::table('usuario');
        $pacientes = $pacientes->get();
        return view('citas.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \ControlCitas\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ControlCitas\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit(Citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ControlCitas\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citas $citas)
    { }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ControlCitas\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citas $citas)
    {
        //
    }
}
