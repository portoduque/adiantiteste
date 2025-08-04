<?php

use Adianti\Control\TPage;
use Adianti\Database\TTransaction;
use Adianti\Widget\Dialog\TMessage;

class ConexaoPrepare extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {
            TTransaction::open('curso');

            var_dump(TTransaction::getDatabase());

            print '<br><br>';

            var_dump(TTransaction::getDatabaseInfo());


            $conn = TTransaction::get();

            $statement = $conn->prepare('SELECT id, nome FROM cliente WHERE id >= ? AND id <= ?');
            $statement->execute([3, 12]);
            $result = $statement->fetchAll();

            print '<br><br>';

            foreach ($result as $row) {
                print $row['id'] . ' - ' .
                    $row['nome'] . '<br>';
            }

            TTransaction::close();

        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}