<?php

use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ObjectDelete extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {

            TTransaction::open('curso');

            TTransaction::dump();


            // Forma 1 de exlcuir
            /* 
            $cliente = Cliente::find(50);

            if ($cliente instanceof Cliente) {
                $cliente->delete();
            } else {
                echo 'Cliente nao encontrado';
            }
            */

            // Forma 2 de excluir
            $cliente = new Cliente();
            $cliente->delete(48);


            TTransaction::close();

        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}

