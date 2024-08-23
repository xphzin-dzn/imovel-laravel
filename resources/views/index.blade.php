@extends('layouts.app')

@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }

        .success, .error {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            color: #fff;
        }

        .success {
            background-color: #28a745;
        }

        .error {
            background-color: #dc3545;
        }
        .action-buttons {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-edit {
            background-color: #ffc107;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .imoveis-table {
            width: 100%;
            border-collapse: collapse;
        }

        .imoveis-table th,
        .imoveis-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .imoveis-table th {
            background-color: #f8f9fa;
            color: #495057;
        }

        .imoveis-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    
    </style>
    <h1>Lista de Imóveis</h1>

    <a href="{{ route('imoveis.create') }}">Adicionar Imóvel</a>
    <a href="{{ route('imoveis.ordenarPreco') }}">Ordenar por Preço</a>
    <a href="{{ route('imoveis.casaMaisCara') }}">Casa Mais Cara</a>
    <a href="{{ route('imoveis.listarPorTipo', 0) }}">Imóveis para Aluguel</a>
    <a href="{{ route('imoveis.listarPorTipo', 1) }}">Imóveis para Venda</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Imobiliária</th>
                <th>Endereço</th>
                <th>Preço</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imoveis as $imovel)
                <tr>
                    <td>{{ $imovel->codigo }}</td>
                    <td>{{ $imovel->nome_imobiliaria }}</td>
                    <td>{{ $imovel->endereco }}</td>
                    <td>{{ $imovel->preco }}</td>
                    <td>{{ $imovel->tipo_negocio == 0 ? 'Aluguel' : 'Venda' }}</td>
                    <td>
                        <a href="{{ route('imoveis.edit', $imovel->codigo) }}">Editar</a>
                        <form action="{{ route('imoveis.destroy') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('POST') <!-- Atualize para POST, o controlador usa POST para exclusão -->

                            <input type="hidden" name="id_for_removing" value="{{ $imovel->codigo }}">
                            
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
