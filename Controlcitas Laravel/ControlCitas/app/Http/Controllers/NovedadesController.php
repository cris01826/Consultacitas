<?php

namespace ControlCitas\Http\Controllers;

use ControlCitas\Novedades;
use Illuminate\Http\Request;
use App;

class NovedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novedad = Novedades::all();
        return view('citas.novedades', compact('novedad'));
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
        $agregarNovedad = new Novedades;
        $agregarNovedad = request()->except('_token');
        Novedades::insert($agregarNovedad);
        return back()->with('agregar', 'La novedad se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \ControlCitas\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function show(Novedades $novedades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ControlCitas\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editarNovedad = Novedades::findOrfail($id);
        return view('citas.editar', compact('editarNovedad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ControlCitas\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actualizarNovedad = new Novedades;
        $actualizarNovedad = Novedades::findOrfail($id);

        $actualizarNovedad = request()->except('_token','_method');
        Novedades::whereId($id)->update($actualizarNovedad);
        return back()->with('update', 'La novedad se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ControlCitas\Novedades  $novedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novedades $novedades)
    {
        //
    }
}
