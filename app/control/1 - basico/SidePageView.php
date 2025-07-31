<?php

use Adianti\Control\TPage;
use Adianti\Widget\Base\TScript;
use Adianti\Widget\Template\THtmlRenderer;

class SidePageView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        parent::setTargetContainer('adianti_right_panel');

        $html = new THtmlRenderer('app\resources\side-page.html');

        $replace = [];

        $replace['title'] = 'Título';
        $replace['body'] = 'Conteúdo';
        $replace['footer'] = 'Rodapé';

        $html->enableSection('main', $replace);

        parent::add($html);
    }

    public function onClose()
    {
        TScript::create('Template.closeRightPanel()');
    }
}