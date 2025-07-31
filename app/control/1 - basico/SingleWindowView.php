<?php

use Adianti\Control\TWindow;

class SingleWindowView extends TWindow
{
    public function __construct()
    {
        parent::__construct();
        parent::setTitle("Título da janela");
        parent::setSize(0.5, null);

        $html = new THtmlRenderer('app\resources\single-page.html');

        $replace = [];
        $replace['title'] = 'Título';
        $replace['body'] = 'Conteúdo';
        $replace['footer'] = 'Rodapé';


        $html->enableSection('main', $replace);


        parent::add($html);
    }
}