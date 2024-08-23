<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imóveis Ordenados por Preço</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Imóveis Ordenados por Preço</h1>

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
                
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
