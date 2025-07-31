<?php

class TesteView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        echo 'Construtor <br>';
        echo 'PHP version' . phpversion();
    }

    public function show()
    {
        parent::show();
        echo 'show <br>';
    }
    public function onEvento($param)
    {
        echo 'Evento <br>';
        echo $param['nome'] . '<br>';
        $param['idade'] = 27;
        var_dump($param);
    }

    public static function onEventoEstatico($param)
    {
        echo 'evento estatico <br>';
    }



}