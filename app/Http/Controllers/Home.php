<?php

// para executar este projeto
// 1- baixar do github 
// https://github.com/ewbriao1978/exemplo_webbackend_IFRS

// 2- entrar na pasta raíz do projeto ( onde está 
// arquivo artisan e executar ): 
// composer update
// 3 - depois renomear .env_example para .env
// 4 - php artisan serve -> entrar em 127.0.0.1:8000
// 5 - erro de generate key irá ocorrer. clicar 
// em generate key e depois "refresh" .
// acho que era isso 


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //

    public function telaInicial(){
        return view('tela');
    }

    public function inserirDados(){
        return view('formulario');
    }

    public function salvaDados(Request $request){
        $data = array(
            'descricao' => $request->descricao,
            'quantidade' => $request->qtd,
            'preco' => $request->preco
        );
        // salvamento no banco de dados. proxima aula!
        // executar php artisan make:model NomeTabelaModel
        // executei php artisan make:model ItensModel
        var_dump($data);


    }
}