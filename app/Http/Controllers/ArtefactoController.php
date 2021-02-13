<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artefacto;

class ArtefactoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artefactos = Artefacto::all();
        return view('artefacto.index')->with('artefactos',$artefactos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artefacto.create');
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
        $artefactos = new Artefacto();
        $artefactos->nombre = $request->get('nombre');
        $artefactos->save();
        return redirect('/artefactos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artefacto = Artefacto::find($id);
        return view('artefacto.edit')->with('artefacto',$artefacto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $artefacto=Artefacto::find($id);
        $artefacto->nombre = $request->get('nombre');
        $artefacto->save();
        return redirect('/artefactos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artefacto = Artefacto::find($id);
        $artefacto->delete();
        return redirect('/artefactos');
    }
}
