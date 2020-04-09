<?php

namespace App\Http\Controllers;

use App\Usuario1;
use Illuminate\Http\Request;

class Usuario1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web');
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
     * @param  \App\Usuario1  $usuario1
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario1 $usuario1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario1  $usuario1
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario1 $usuario1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario1  $usuario1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario1 $usuario1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario1  $usuario1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario1 $usuario1)
    {
        //
    }
}
