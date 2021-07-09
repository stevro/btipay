<?php


namespace Stev\BTIPay\Exceptions;


class ValidationException extends \Exception
{

    /**
     * @var string
     */
    private $property;

    /**
     * @var mixed
     */
    private $value;

    public function __construct($property, $value, $message = "", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->property = $property;
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }


}