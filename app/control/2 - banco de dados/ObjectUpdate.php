<?php

use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ObjectUpdate extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {

            TTransaction::open('curso');

            TTransaction::dump();

            $cliente = Cliente::find(5);

            if ($cliente instanceof Cliente) {
                $cliente->nome = 'Heraclito';
                $cliente->store();
            } else {
                echo 'Cliente nao encontrado';
            }


            TTransaction::close();

        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}

