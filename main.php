<?php

require_once 'FormBuilder.php';
require_once 'Form.php';
require_once 'FormManager.php';

//builder init
$builder = new \Builder\FormBuilder();
//method without manager
$form[] = $builder->setCity('Dnipro')->setName('Bogdan')->setPhone('0987477378383')->getForm();

//manager init
$manager = new \Builder\FormManager();
//set builder with properties into manager
$manager->setBuilder($builder);

//method with manager
$form[] = $manager->createSmallForm();
$form[] = $manager->createBigForm();

var_dump($form);


