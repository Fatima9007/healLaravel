<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['usuarios']=usuario::paginate(5);
        return view('usuario.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datoUsuario=request()->all();
        $datoUsuario=request()->except('_token');
        if ($request->hasFile('foto')) {
            $datoUsuario['foto']=$request->file('foto')->store('uploads','public');
        }
        usuario::insert($datoUsuario);
        return response()->json($datoUsuario);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario= usuario::findOrFail($id);
        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datoUsuario=request()->except(['_token','_method']);
        
        usuario::where('id','=',$id)->update($datoUsuario);
        $usuario= usuario::findOrFail($id);
        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        usuario::destroy($id);
        return redirect('Usuario');    
    }
}
