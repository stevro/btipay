<?php


namespace Stev\BTIPay\Responses;


use JMS\Serializer\Annotation as Serializer;
use Stev\BTIPay\Util\ErrorCodes;

class BaseResponse implements ResponseInterface
{


    /**
     * @var int
     * @Serializer\Type("int")
     */
    protected $errorCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $errorMessage;

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return BaseResponse
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return BaseResponse
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }


}