<?php

use Adianti\Control\TPage;
use Adianti\Widget\Base\TElement;

class EmbeddedPDFView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $object = new TElement('iframe');
        $object->width = '100%';
        $object->height = '600px';
        $object->src = 'https://www.caceres.mt.gov.br/fotos_institucional_downloads/2.pdf';
        $object->type = 'application/pdf';

        parent::add($object);

    }
}