<?php

use Adianti\Control\TAction;
use Adianti\Control\TPage;
use Adianti\Widget\Dialog\TInputDialog;
use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Form\TEntry;
use Adianti\Widget\Form\TForm;
use Adianti\Widget\Form\TLabel;
use Adianti\Wrapper\BootstrapFormBuilder;

class DialogInputView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $form = new BootstrapFormBuilder('input_form');

        $login = new TEntry('login');
        $password = new TEntry('password');


        $form->addFields([new TLabel('Login')], [$login]);
        $form->addFields([new TLabel('Senha')], [$password]);

        $form->addAction('Confirmar', new TAction([$this, 'onConfirm1'], ['fa:save green']));



        new TInputDialog('Título', $form);
    }

    public static function onConfirm1($param)
    {
        # new TMessage('info', 'Login: ' . $param['login'] . 'Senha: ' . $param['password']);
        new TMessage('info', json_encode($param));
    }
}