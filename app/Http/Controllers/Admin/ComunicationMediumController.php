<?php

namespace App\Http\Controllers;

use App\Models\ComunicationMedium;
use App\Http\Requests\StoreComunicationMediumRequest;
use App\Http\Requests\UpdateComunicationMediumRequest;

class ComunicationMediumController extends Controller
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
     * @param  \App\Http\Requests\StoreComunicationMediumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComunicationMediumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComunicationMedium  $comunicationMedium
     * @return \Illuminate\Http\Response
     */
    public function show(ComunicationMedium $comunicationMedium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComunicationMedium  $comunicationMedium
     * @return \Illuminate\Http\Response
     */
    public function edit(ComunicationMedium $comunicationMedium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComunicationMediumRequest  $request
     * @param  \App\Models\ComunicationMedium  $comunicationMedium
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComunicationMediumRequest $request, ComunicationMedium $comunicationMedium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComunicationMedium  $comunicationMedium
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComunicationMedium $comunicationMedium)
    {
        //
    }
}
