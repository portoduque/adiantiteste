<?php

use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Template\THtmlRenderer;


class TemplateViewBasico extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {
            $html = new THtmlRenderer('app\resources\template-basico.html');

            $pessoa = new stdClass;
            $pessoa->nome = 'Gabriel';
            $pessoa->idade = 27;
            $pessoa->cargo = 'Analista de sistemas';

            $replace = [];
            $replace['pessoa'] = $pessoa;

            $html->enableSection('main', $replace);


            $pessoa2 = new stdClass;
            $pessoa2->nome = 'Gabriel Porto';
            $pessoa2->idade = 40;
            $pessoa2->cargo = 'Programador';

            $replace2 = [];
            $replace2['pessoa2'] = $pessoa2;

            $html->enableSection('outros', $replace2);


            parent::add($html);
        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }

}