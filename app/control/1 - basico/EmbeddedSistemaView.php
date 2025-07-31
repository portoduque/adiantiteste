<?php

use Adianti\Control\TPage;
use Adianti\Widget\Base\TElement;

class EmbeddedSistemaView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $object = new TElement('iframe');
        $object->width = '100%';
        $object->height = '600px';
        $object->src = 'https://respirarapp.sesau.ro.gov.br/';

        parent::add($object);
    }
}