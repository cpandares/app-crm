<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comunicacion;
use App\Models\ComunicationMedium;
use Illuminate\Http\Request;

class ComunicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Comunicacion $comunicacion)
    {
       /*  dd($request); */
        $request->validate([
            'asunto'=>'required',
            'detalle' => 'string|required'
        ]);

        try {
            //code...

            $comunicacion = new Comunicacion();
            $comunicacion->asunto = $request->asunto;
            $comunicacion->detalle = $request->detalle;
            $comunicacion->user_created = auth()->user()->id;
            $comunicacion->user_created_for = $request->contact_id;
            $comunicacion->comunicacion_media_id = $request->medio_comunicacion;
            $comunicacion->save();

            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
        }
        
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
    }
}
