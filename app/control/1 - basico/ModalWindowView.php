<?php

use Adianti\Control\TWindow;
class ModalWindowView extends TWindow
{
    public function __construct()
    {
        parent::__construct();
        parent::setSize(0.6, null);
        parent::removePadding();
        parent::removeTitleBar();
        parent::disableEscape();


        $html = new THtmlRenderer('app\resources\modal-page.html');

        $replace = [];
        $replace['title'] = 'Título';
        $replace['body'] = 'Conteúdo';
        $replace['footer'] = 'Rodapé';


        $html->enableSection('main', $replace);

        parent::add($html);
    }
}