<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;


class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TipoProducto::all();
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
         $TipoProducto=new TipoProducto();
         $TipoProducto->id_tipoProducto=$request->get('id_tipoProducto');
         $TipoProducto->nombre=$request->get('nombre');

         $TipoProducto->save();
    
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
        return TipoProducto::find($id);
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
        $TipoProducto= TipoProducto::find($id);
        $TipoProducto->id_tipoProducto=$request->get('id_tipoProducto');
        $TipoProducto->nombre=$request->get('nombre');

        $TipoProducto->save();

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
        $TipoProducto= TipoProducto::find($id);
        $TipoProducto->delete();
        
        
    }
}
