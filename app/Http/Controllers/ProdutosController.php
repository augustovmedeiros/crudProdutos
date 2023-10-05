<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function showall(){
        $produto = Produto::all();
        return view('produtos', ['produtos' => $produto]);
    }
    
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco
        ]);

        return 'Produto criado!<br/><a href="."><button>Voltar</button></a>';
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('show', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco
        ]);

        return 'Produto atualizado!<br/><a href=".."><button>Voltar</button></a>';
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        
        return 'Produto excluido!<br/><a href=".."><button>Voltar</button></a>';
    }

}
