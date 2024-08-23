@extends('layouts.app')

@section('content')
    <h1>Casa Mais Cara</h1>

    @if($imovel)
        <div>
            <p><strong>Código:</strong> {{ $imovel->codigo }}</p>
            <p><strong>Imobiliária:</strong> {{ $imovel->nome_imobiliaria }}</p>
            <p><strong>Endereço:</strong> {{ $imovel->endereco }}</p>
            <p><strong>Preço:</strong> {{ $imovel->preco }}</p>
            <p><strong>Tipo:</strong> {{ $imovel->tipo_negocio == 0 ? 'Aluguel' : 'Venda' }}</p>
        </div>
    @else
        <p>Nenhum imóvel encontrado.</p>
    @endif
@endsection