<?php

namespace App\Http\Controllers;
use App\Models\AluguelFilmeModel;
use Illuminate\Http\Request;
use App\Models\tbfilmesModel;
use Illuminate\Support\Facades\DB;


class tbfilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    
    public function listarfilmes()
    {
        $filmes = DB::table('tbfilmes')
        ->join('tbgeneros', 'tbfilmes.genero_filme', '=', 'tbgeneros.id_genero')
        ->select('tbfilmes.titulo_filme', 'tbfilmes.id_filme', 'tbfilmes.sinopse_filme', 'tbfilmes.valor_filme', 'tbgeneros.nome_genero')
        ->where('tbfilmes.disponiveis_filme', '>', 0)
        ->get();
        return view('lista_filmes', compact('filmes'));
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
    public function store(Request $request)
    {
        $filme = tbfilmesModel::create([
            'titulo_filme' => $request->titulo_filme,
            'sinopse_filme' => $request->sinopse_filme,
            'valor_filme' => $request->valor_filme,
            'disponiveis_filme' => $request->disponiveis_filme,
            'genero_filme' => $request->genero_filme,
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
