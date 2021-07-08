<?php


namespace Stev\BTIPay\Responses;


class RegisterResponse extends BaseResponse
{
    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var string|null
     */
    protected $formUrl;

    /**
     * @var int
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