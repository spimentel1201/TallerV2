<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guia;
use App\Models\Artefacto;
class GuiaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $nombres=$request->get('buscarpor');
        //dd($nombres);
        $guias =Guia::where('nombresC','like',"%$nombres%")->paginate(5);
        //return dd($artefacto);
        //$guias=Guia::all();
        return view('guia.index')->with('guias',$guias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $artefacto = Artefacto::all();
        return view('guia.create',compact('artefacto'));
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
        $guias = new Guia();
        $guias->nombresC = $request->get('nombresC');
        $guias->apellidosC = $request->get('apellidosC');
        $guias->telefono = $request->get('telefono');
        $guias->dni = $request->get('dni');
        $guias->direccion= $request->get('direccion');
        $guias->artefacto = $request->get('artefacto');
        $guias->marca = $request->get('marca');
        $guias->modelo = $request->get('modelo');
        $guias->serie = $request->get('serie');
        $guias->accesorios = $request->get('accesorios');
        $guias->descripcion = $request->get('descripcion');
        $guias->fecha_ing = $request->get('fecha_ing');
        $guias->estado = $request->get('estado');
        $guias->monto = $request->get('monto');
        $guias->save();
        return redirect('/guias');
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
        $guia = Guia::find($id);
        $artefacto = Artefacto::all();
        return view('guia.edit',compact('artefacto'))->with('guia',$guia);
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
        $guia=Guia::find($id);
        $guia->nombresC = $request->get('nombresC');
        $guia->apellidosC = $request->get('apellidosC');
        $guia->telefono = $request->get('telefono');
        $guia->dni = $request->get('dni');
        $guia->direccion= $request->get('direccion');
        $guia->artefacto = $request->get('artefacto');
        $guia->marca = $request->get('marca');
        $guia->modelo = $request->get('modelo');
        $guia->serie = $request->get('serie');
        $guia->accesorios = $request->get('accesorios');
        $guia->descripcion = $request->get('descripcion');
        //$guia->fecha_ing = $request->get('fecha_ing');
        $guia->estado = $request->get('estado');
        $guia->monto = $request->get('monto');
        $guia->save();
        return redirect('/guias');
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
        $guia = Guia::find($id);
        $guia->delete();
        return redirect('/guias');
    }
}
