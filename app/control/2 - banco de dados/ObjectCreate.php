<?php

use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ObjectCreate extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {

            TTransaction::open('curso');

            // Mostrar log na tela 1
            TTransaction::setLoggerFunction(function ($mensagem) {
                print $mensagem . '<br><br>';
            });


            // Mostrar log na tela 2
            TTransaction::dump();

            Cliente::create(
                [
                    'nome' => 'Andre',
                    'genero' => 'M',
                    'categoria_id' => 2,
                    'cidade_id' => 1
                ]
            );

            new TMessage('info', "Cliente cadastrado com sucesso");

            TTransaction::close();

        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}

