<?php

namespace App\Http\Controllers;

use App\Models\Eixo;
use Illuminate\Http\Request;

class EixoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Eixo::all();
        return view('eixo.index',compact(['data'])) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eixo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $eixo = new Eixo();
        $eixo->nome = $request->nome;
        $eixo->descricao = $request->descricao;
        $eixo->save();

        return redirect()->route('eixo.create');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eixo = Eixo::find($id);

        if (isset($eixo)) {
            return view('eixo.show', compact(['eixo']));
        }
        return "<H1>DEU MERDA PILANTRAKKKKKKKKKKKKKKKKKKKK!</H1>";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eixo = Eixo::find($id);

        if (isset($eixo)) {
            return view('eixo.show', compact(['eixo']));
        }
        return "<H1>DEU MERDA PILANTRAKKKKKKKKKKKKKKKKKKKK!</H1>";

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
