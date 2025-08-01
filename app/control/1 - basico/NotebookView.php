<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TNotebook;
use Adianti\Widget\Container\TTable;
use Adianti\Widget\Form\TEntry;
use Adianti\Widget\Form\TLabel;

class NotebookView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $notebook = new TNotebook();

        $table1 = new TTable();
        $table2 = new TTable();

        $field1 = new TEntry('field1');
        $field2 = new TEntry('field2');
        $field3 = new TEntry('field3');
        $field4 = new TEntry('field4');
        $field5 = new TEntry('field5');
        $field6 = new TEntry('field6');

        $table1->addRowSet(new TLabel('Field 1'), $field1);
        $table1->addRowSet(new TLabel('Field 2'), $field2);
        $table1->addRowSet(new TLabel('Field 3'), $field3);

        $table2->addRowSet(new TLabel('Field 4'), $field4);
        $table2->addRowSet(new TLabel('Field 5'), $field5);
        $table2->addRowSet(new TLabel('Field 6'), $field6);

        $notebook->appendPage('Aba 1', $table1);
        $notebook->appendPage('Aba 2', $table2);


        parent::add($notebook);
    }
}