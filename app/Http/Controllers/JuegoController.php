<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juego;

class JuegoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('auth', ['only'=>'create']);
        //$this->middleware('auth')->only('create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juego = Juego::paginate(3);
        return view('juego.index', compact('juego'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juego.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $juego = new Juego;
        $juego->nombre=$request->nombre;
        $juego->url=$request->url;
        $juego->descripcion=$request->descripcion;
        $juego->url_imagen=$request->url_imagen;
        $juego->estado=$request->estado;
        $juego->save();
        return redirect()->route('juego.index')->with('datos', 'Registro guardado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juego = Juego::findOrFail($id);
        return view('juego.show', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $juego = Juego::findOrFail($id);
        return view('juego.edit', compact('juego'));
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
        $juego = Juego::findOrFail($id);
        $juego->nombre=$request->nombre;
        $juego->url=$request->url;
        $juego->descripcion=$request->descripcion;
        $juego->url_imagen=$request->url_imagen;
        $juego->estado=$request->estado;
        $juego->save();
        return redirect()->route('juego.index')->with('datos', 'Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $juego = Juego::findOrFail($id);
        $juego->delete();
        return redirect()->route('juego.index')->with('datos', 'Registro borrado correctamente!', compact('juego'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($id)
    {
        $juego = Juego::findOrFail($id);
        return view('juego.confirm', compact('juego'));
    }
}
