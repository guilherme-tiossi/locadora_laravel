<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tbgenerosModel;
use Illuminate\Support\Facades\DB;

class tbgenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    
    public function listargeneros()
    {
        $generos = tbgenerosModel::all();
        return view('crud_adm', compact('generos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $filme_update = DB::table('tbgeneros')
        ->where('tbgeneros.id_genero', '=', $request->id_genero)
        ->update(['tbgeneros.nome_genero' => $request->nome_genero,
        ]);
        return redirect('/crud_adm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filme = tbgenerosModel::create([
            'nome_genero' => $request->genero,
        ]);

        return redirect('/crud_adm');
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $filme_update = DB::table('tbgeneros')
        ->where('tbgeneros.id_genero', '=', $request->id_genero)
        ->delete();
        return redirect('/crud_adm');
    }
}
