<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::all();
        return view('index', compact('imoveis'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome_imobiliaria' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'tipo_negocio' => 'required|integer',
        ]);

        Imovel::create($validatedData);

        return redirect()->route('imoveis.index')->with('success', 'Imóvel criado com sucesso!');
    }

    public function edit($codigo)
    {
        $imovel = Imovel::where('codigo', $codigo)->firstOrFail();
        return view('edit', compact('imovel'));
    }

    /**
     * Atualizar o imóvel existente.
     */
    public function update(Request $request, $codigo)
    {
        $validatedData = $request->validate([
            'nome_imobiliaria' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'tipo_negocio' => 'required|integer',
        ]);
    
        $imovel = Imovel::findOrFail($codigo);
        $imovel->update($validatedData);
    
        return redirect()->route('imoveis.index')->with('success', 'Imóvel atualizado com sucesso!');
    }

    /**
     * Remover o imóvel do banco de dados.
     */
    public function destroy(Request $request)
    {
        $codigo = $request->input('id_for_removing');
        $imovel = Imovel::where('codigo', $codigo)->firstOrFail();
        $imovel->delete();

        return redirect()->route('imoveis.index')->with('success', 'Imóvel removido com sucesso!');
    }

public function casaMaisCara()
{
    $imovel = Imovel::orderBy('preco', 'desc')->first();
    return view('casa_mais_cara', compact('imovel'));
}
public function listarPorTipo($tipo)
{
    $imoveis = Imovel::where('tipo_negocio', $tipo)->get();
    $tipoTexto = $tipo == 0 ? 'Aluguel' : 'Venda';
    return view('imoveis_por_tipo', compact('imoveis', 'tipoTexto'));
}
public function ordenarPorPreco()
{
   
    $imoveis = Imovel::orderBy('preco', 'asc')->get();

    return view('ordenar_preco', compact('imoveis'));
}

}

