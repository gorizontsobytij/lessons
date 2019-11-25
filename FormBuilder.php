<?php


namespace Builder;


use Builder\Form;
use Builder\FormBuilderInterface;


require_once 'FormBuilderInterface.php';
require_once 'Form.php';

class FormBuilder implements FormBuilderInterface
{
    /**
     * @var FormBuilder
     */
    private $formBuilder;

    /**
     * FormBuilder constructor.
     */
    public function __construct()
    {
       $this->create();
    }
    /**
     * @return FormBuilderInterface
     */
    public function create(): FormBuilderInterface
    {
        $this->formBuilder = new Form();
        return $this;
    }
    /**
     * @param string $name
     * @return FormBuilderInterface
     */
    public function setName(string $name): FormBuilderInterface
    {
        $this->formBuilder->name = $name;
        return $this;
    }
    /**
     * @param string $email
     * @return FormBuilderInterface
     */
    public function setEmail(string $email): FormBuilderInterface
    {
        $this->formBuilder->email = $email;
        return $this;
    }
    /**
     * @param string $phone
     * @return FormBuilderInterface
     */
    public function setPhone(string $phone): FormBuilderInterface
    {
        $this->formBuilder->phone = $phone;
        return $this;
    }
    /**
     * @param string $city
     * @return FormBuilderInterface
     */
    public function setCity(string $city): FormBuilderInterface
    {
        $this->formBuilder->city = $city;
        return $this;
    }
    /**
     * @param string $country
     * @return FormBuilderInterface
     */
    public function setCountry(string $country): FormBuilderInterface
    {
        $this->formBuilder->country = $country;
        return $this;
    }
    /**
     * @return Form
     */
    public function getForm(): Form
    {
        $result = $this->formBuilder;
        $this->create();
        return $result;
    }
}