<?php

use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ObjectStore extends TPage
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

            $cliente = new Cliente();
            $cliente->nome = 'Gabriel Porto';
            $cliente->genero = 'M';
            $cliente->categoria_id = 2;
            $cliente->cidade_id = 3;
            $cliente->store();

            new TMessage('info', "Cliente cadastrado com sucesso");

            TTransaction::close();

        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}


