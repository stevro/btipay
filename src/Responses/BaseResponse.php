<?php


namespace Stev\BTIPay\Responses;


use JMS\Serializer\Annotation as Serializer;
use Stev\BTIPay\Util\ErrorCodes;

class BaseResponse implements ResponseInterface
{


    /**
     * @Serializer\Type("int")
     */
    protected ?int $errorCode = null;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected string $errorMessage;

    /**
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * @param int|null $errorCode
     * @return BaseResponse
     */
    public function setErrorCode(?int $errorCode): static
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return BaseResponse
     */
    public function setErrorMessage(string $errorMessage): static
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }


}