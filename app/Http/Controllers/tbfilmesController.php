<?php

namespace App\Http\Controllers;
use App\Models\AluguelFilmeModel;
use Illuminate\Http\Request;
use App\Models\tbfilmesModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $user_id = Auth::user()->id;
        $meus_filmes = DB::table('tbalugueis')
        ->join('tbfilmes', 'tbalugueis.id_filme', '=', 'tbfilmes.id_filme')
        ->select('tbalugueis.id_filme', 'tbalugueis.validade_aluguel')
        ->where('tbalugueis.id_user', '=', $user_id)->where('tbalugueis.devolvido', '=', '0')
        ->get();
        $filmes_alugados = array();
        foreach ($meus_filmes as $mf){
            array_push($filmes_alugados, $mf->id_filme); 
        };
        $filmes = DB::table('tbfilmes')
        ->join('tbgeneros', 'tbfilmes.genero_filme', '=', 'tbgeneros.id_genero')
        ->select('tbfilmes.titulo_filme', 'tbfilmes.id_filme', 'tbfilmes.sinopse_filme', 'tbfilmes.valor_filme', 'tbgeneros.nome_genero')
        ->where('tbfilmes.disponiveis_filme', '>', 0)->whereNotIn('tbfilmes.id_filme', $filmes_alugados)
        ->get();
        return view('lista_filmes', compact('filmes'));
    }

    public function search(Request $request)
    {
            $user_id = Auth::user()->id;
            $meus_filmes = DB::table('tbalugueis')
            ->join('tbfilmes', 'tbalugueis.id_filme', '=', 'tbfilmes.id_filme')
            ->select('tbalugueis.id_filme', 'tbalugueis.validade_aluguel')
            ->where('tbalugueis.id_user', '=', $user_id)->where('tbalugueis.devolvido', '=', '0')
            ->get();
            $filmes_alugados = array();
            foreach ($meus_filmes as $mf){
                array_push($filmes_alugados, $mf->id_filme); 
            };
            $filmes_pesquisa = DB::table('tbfilmes')
            ->join('tbgeneros', 'tbfilmes.genero_filme', '=', 'tbgeneros.id_genero')
            ->select('tbfilmes.titulo_filme', 'tbfilmes.id_filme', 'tbfilmes.sinopse_filme', 'tbfilmes.valor_filme', 'tbgeneros.nome_genero')
            ->where('tbfilmes.disponiveis_filme', '>', 0)->whereNotIn('tbfilmes.id_filme', $filmes_alugados)
            ->where('tbfilmes.titulo_filme', 'LIKE', '%'.$request->get('value').'%')
            ->get();
            //ADICIONAR DATA AO ARRAY $FILMES_PESQUISA CORREÇÃO BUG
            return json_encode($filmes_pesquisa);
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
    public function update(Request $request)
    {
        tbfilmesModel::where('id_filme', '=', $request->id_filme)
        ->update(['tbfilmes.titulo_filme' => $request->titulo_filme,
         'tbfilmes.sinopse_filme' => $request->sinopse_filme,
         'tbfilmes.valor_filme' => $request->valor_filme,
         'tbfilmes.genero_filme' => $request->genero_filme,
         'tbfilmes.disponiveis_filme' => $request->disponiveis_filme,
         'tbfilmes.valor_filme' => $request->valor_filme,
        ]);
        return redirect('/crud_adm');
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
        tbfilmesModel::where('id_filme', '=', $request->id_filme)->delete();
        return redirect('/crud_adm');
    }
}
