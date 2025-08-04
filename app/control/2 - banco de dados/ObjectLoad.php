<?php

use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ObjectLoad extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {

            TTransaction::open('curso');

            TTransaction::dump();

            $cliente = new Cliente(4);

            echo '<b>Nome:</b> ' . $cliente->nome;
            echo '<br>';
            echo '<b>Gênero:</b> ' . $cliente->genero;

            TTransaction::close();

        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}

