<?php

use Adianti\Widget\Container\TVBox;
use Adianti\Widget\Template\THtmlRenderer;
use Adianti\Widget\Util\TXMLBreadCrumb;

class SinglePageView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $html = new THtmlRenderer('app\resources\single-page.html');

        $replace = [];
        $replace['title'] = 'Título';
        $replace['body'] = 'Conteúdo';
        $replace['footer'] = 'Rodapé';


        $html->enableSection('main', $replace);

        $vbox = new TVBox();
        $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $vbox->style = "width:100%";
        $vbox->add($html);

        parent::add($vbox);

    }
}