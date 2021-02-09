<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = DB::table('tb_produtos AS p')
            ->join('tb_categorias_produtos AS c', 'p.id_categoria_produto', '=', 'c.id_categoria_produto')
            ->select('p.*', 'c.nome_categoria')
            
            ->get();

            return view('pages.produtos.index', [
                'produtos' => $produtos
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nome_categoria')->get();

        return view('pages.produtos.create', [
            'produto' => null,
            'categorias' => $categorias,
            'action' => '/produtos/store'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome_produto = $request->post('nome_produto');
        //$produto->valor_produto = $request->post('valor_produto');
        $produto->valor_produto = $request->post('valor_produto');
        $produto->id_categoria_produto = $request->post('id_categoria_produto');

        $produto->save();

        return redirect('/produtos')->with('message', 'Produto Cadastrada.');
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
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::orderBy('nome_categoria')->get();

        return view('pages.produtos.create', [
            'produto' => $produto,
            'categorias' => $categorias,
            'action' => '/produtos/update/'.$produto->id_produto
        ]);
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
        $produto = Produto::findOrFail($id);
        $produto->nome_produto = $request->post('nome_produto');
        $produto->valor_produto = $request->post('valor_produto');
        $produto->id_categoria_produto = $request->post('id_categoria_produto');

        $produto->save();

        return redirect('/produtos')->with('message', 'Produto Cadastrada.');
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
        $produto->delete();

        return redirect('/produtos')->with('message', 'Produto removido.');
    }
}
