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
        $messages = [
            'nome.required' => 'O campo :attribute é obrigatório.',
            'nome.min'      => 'O :attribute precisa ter no minimo :min.',
            'valor.required'=> 'O campo :attribute é obrigatório.',
            'valor.numeric' => 'O campo :attribute precisa ser numérico!',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
            'valor'=> 'required|numeric',
        ], $messages);

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->save();

        return redirect('/produto')->with('status', 'Produto Criado com sucesso!');



        //dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show',['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
        $messages = [
            'nome.required' => 'O campo :attribute é obrigatório.',
            'nome.min'      => 'O :attribute precisa ter no minimo :min.',
            'valor.required'=> 'O campo :attribute é obrigatório.',
            'valor.numeric' => 'O campo :attribute precisa ser numérico!',
        ];

        $validated = $request->validate([
            'nome' => 'required|min:5',
            'valor'=> 'required|numeric',
        ], $messages);

        $produto = Produto::findOrFail($request->id);
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->save();

        return redirect('/produto')->with('status', 'Produto atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto-> delete();
        
        return redirect('/produto')->with('status', 'Produto excluido com sucesso!');
    }
}
