<?php

use Adianti\Control\TPage;
use Adianti\Control\TWindow;
class OnDemandWindowView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $window = TWindow::create('Título da janela sob demanda', 0.8, null);


        $html = new THtmlRenderer('app\resources\single-page.html');

        $replace = [];
        $replace['title'] = 'Título';
        $replace['body'] = 'Conteúdo';
        $replace['footer'] = 'Rodapé';


        $html->enableSection('main', $replace);

        $window->add($html);
        $window->show();
    }
}