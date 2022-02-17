<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index / listar
        $produtos= Produto::orderBy('nome', 'ASC')->get();
        return view('produto.index',['produtos' => $produtos]);
        
        //->where('id',1)
                
        //dd($produtos);

        

        //store / salvar
        //$produto = new Produto;
        //$produto->nome  = 'Monitor Ultrawide 36';
        //$produto->valor = 3000;
        //$produto->save();

        //dd('Salvou!');

         //show / exibir
        //$produto = Produto::findOrFail(4);
        //dd($produto);

        //Update / atualizar
        //$produto = Produto::findOrFail(4);
        //$produto->nome = 'Super Monitor UltraWide 36';
        //$produto->valor= 5000;
        //$produto->save();

        //dd('Atualizou!');

        //destroy / excluir
        //$produto = Produto::findOrFail(4);
        //$produto->delete();
        //dd('Excluiu!');
    }
       
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('produto.create');
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
