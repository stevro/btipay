<?php


namespace Stev\BTIPay\Responses;


use Stev\BTIPay\Util\ErrorCodes;

class BaseResponse implements ResponseInterface
{


    /**
     * @var int
     */
    protected $errorCode;

    /**
     * @var string
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

    public function getErrorCodeString()
    {
        return ErrorCodes::parseErrorCode($this->errorCode);
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