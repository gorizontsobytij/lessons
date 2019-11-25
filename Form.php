<?php


namespace Builder;

require_once 'FormBuilder.php';
require_once 'FormBuilderInterface.php';

class Form
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $country;
}