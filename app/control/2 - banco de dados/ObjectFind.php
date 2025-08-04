<?php

use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ObjectFind extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {

            TTransaction::open('curso');

            TTransaction::dump();

            $cliente = Cliente::find(5);

            if ($cliente instanceof Cliente) {

                echo '<b>Nome:</b> ' . $cliente->nome;
                echo '<br>';
                echo '<b>Gênero:</b> ' . $cliente->genero;
            } else {
                echo 'Cliente nao encontrado';
            }


            TTransaction::close();

        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}

