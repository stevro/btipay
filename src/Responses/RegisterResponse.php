<?php


namespace Stev\BTIPay\Responses;


use JMS\Serializer\Annotation as Serializer;

class RegisterResponse extends BaseResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected string $orderId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected ?string $formUrl;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    protected int $recurrenceId;

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return RegisterResponse
     */
    public function setOrderId(string $orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFormUrl(): ?string
    {
        return $this->formUrl;
    }

    /**
     * @param string|null $formUrl
     * @return RegisterResponse
     */
    public function setFormUrl(?string $formUrl): static
    {
        $this->formUrl = $formUrl;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecurrenceId(): int
    {
        return $this->recurrenceId;
    }

    /**
     * @param int $recurrenceId
     * @return RegisterResponse
     */
    public function setRecurrenceId(int $recurrenceId): static
    {
        $this->recurrenceId = $recurrenceId;

        return $this;
    }

}