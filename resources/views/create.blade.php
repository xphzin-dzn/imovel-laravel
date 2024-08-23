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

        form {
            display: flex;
            flex-direction: column;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            color: red;
            margin: 5px 0;
        }
    </style>

    <div class="container">
        <h1>Cadastrar Novo Imóvel</h1>

        <form action="{{ route('imoveis.store') }}" method="POST">
            @csrf

            <div>
                <label for="nome_imobiliaria">Imobiliária:</label>
                <input type="text" name="nome_imobiliaria" value="{{ old('nome_imobiliaria') }}">
                @error('nome_imobiliaria')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" value="{{ old('endereco') }}">
                @error('endereco')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="preco">Preço:</label>
                <input type="number" name="preco" value="{{ old('preco') }}">
                @error('preco')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="tipo_negocio">Tipo de Negócio:</label>
                <select name="tipo_negocio">
                    <option value="0">Aluguel</option>
                    <option value="1">Venda</option>
                </select>
                @error('tipo_negocio')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Cadastrar Imóvel</button>
        </form>
    </div>
@endsection
