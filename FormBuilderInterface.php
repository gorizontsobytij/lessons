<?php


namespace Builder;


use Builder\Form;

interface FormBuilderInterface
{
    /**
     * @return FormBuilderInterface
     */
    public function create() : FormBuilderInterface;

    /**
     * @param string $name
     * @return FormBuilderInterface
     */
    public function setName(string $name) : FormBuilderInterface;

    /**
     * @param string $email
     * @return FormBuilderInterface
     */
    public function setEmail(string $email) : FormBuilderInterface;

    /**
     * @param string $phone
     * @return FormBuilderInterface
     */
    public function setPhone(string $phone) : FormBuilderInterface;

    /**
     * @param string $city
     * @return FormBuilderInterface
     */
    public function setCity(string $city) : FormBuilderInterface;

    /**
     * @param string $country
     * @return FormBuilderInterface
     */
    public function setCountry(string $country) : FormBuilderInterface;


    /**
     * @return \Builder\Form\
     */
    public function getForm(): Form;
}