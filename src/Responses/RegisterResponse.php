<?php


namespace Stev\BTIPay\Responses;


use JMS\Serializer\Annotation as Serializer;

class RegisterResponse extends BaseResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $orderId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $formUrl;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    protected $recurrenceId;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return RegisterResponse
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormUrl()
    {
        return $this->formUrl;
    }

    /**
     * @param string|null $formUrl
     * @return RegisterResponse
     */
    public function setFormUrl($formUrl)
    {
        $this->formUrl = $formUrl;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecurrenceId()
    {
        return $this->recurrenceId;
    }

    /**
     * @param int $recurrenceId
     * @return RegisterResponse
     */
    public function setRecurrenceId($recurrenceId)
    {
        $this->recurrenceId = $recurrenceId;

        return $this;
    }


}