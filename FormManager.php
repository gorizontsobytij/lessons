<?php


namespace Builder;

use Builder\FormBuilderInterface;

require_once 'FormBuilder.php';
require_once 'FormBuilderInterface.php';


class FormManager
{

    private $builder;

    /**
     * @param \Builder\FormBuilderInterface $builder
     * @return $this
     */
    public function setBuilder(FormBuilderInterface $builder)
    {
        $this->builder = $builder;
        return $this;
    }

    public function createCleanForm()
    {
        $form = $this->builder->getForm();
        return $form;
    }

    public function createSmallForm()
    {
        $form = $this->builder
            ->setName('Petr')
            ->setPhone('09876654356')
            ->getForm();
        return $form;
    }

    public function createBigForm()
    {
        $form = $this->builder
            ->setName('Petr')
            ->setPhone('09876654356')
            ->setEmail('mail@mail.com')
            ->setCity('Kiev')
            ->getForm();
        return $form;
    }
}