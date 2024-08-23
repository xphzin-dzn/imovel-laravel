@extends('layouts.app')

@section('content')
    <h1>Imóveis para {{ $tipoTexto }}</h1>

    @if(count($imoveis) > 0)
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Imobiliária</th>
                    <th>Endereço</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                @foreach($imoveis as $imovel)
                    <tr>
                        <td>{{ $imovel->codigo }}</td>
                        <td>{{ $imovel->nome_imobiliaria }}</td>
                        <td>{{ $imovel->endereco }}</td>
                        <td>{{ $imovel->preco }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum imóvel encontrado.</p>
    @endif
@endsection
