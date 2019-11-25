<?php

require_once 'FormBuilder.php';
require_once 'Form.php';

var_dump('dfkjdjfhjfdm');
$form = new \Builder\FormBuilder();
$res = $form->setCity('Dnipro')->setName('Bogdan')->setPhone('0987477378383')->getForm();



var_dump($res);
