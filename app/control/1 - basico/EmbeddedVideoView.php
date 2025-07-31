<?php

use Adianti\Control\TPage;
use Adianti\Widget\Base\TElement;

class EmbeddedVideoView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $object = new TElement('iframe');
        $object->width = '100%';
        $object->height = '600px';
        $object->src = 'https://www.youtube.com/embed/lrtaKjFzHaI?si=i_HvIy3nX7gvlURE';
        $object->frameborder = '0';
        $object->allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';

        parent::add($object);

    }
}



