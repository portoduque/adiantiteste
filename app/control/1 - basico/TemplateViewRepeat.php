<?php

use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Template\THtmlRenderer;

class TemplateViewRepeat extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try {
            $html = new THtmlRenderer('app\resources\template-repeat.html');

            $html->enableSection('main', []);

            $replace = [];
            $replace[] = ['id' => 1, 'nome' => 'Gabriel', 'endereco' => 'Endereço 1'];
            $replace[] = ['id' => 2, 'nome' => 'Rafael', 'endereco' => 'Endereço 2'];
            $replace[] = ['id' => 3, 'nome' => 'Rodrigo', 'endereco' => 'Endereço 3'];

            $html->enableSection('details', $replace, true);

            parent::add($html);
        } catch (Exception $e) {
            new TMessage('error', $e->getMessage());
        }
    }
}