<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class BindingInfo
{

    /**
     * @var string | null
     *  @Serializer\Type("string")
     */
    private ?string $clientId;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $bindingId;

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     * @return static
     */
    public function setClientId(?string $clientId): static
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBindingId(): ?string
    {
        return $this->bindingId;
    }

    /**
     * @param string|null $bindingId
     * @return BindingInfo
     */
    public function setBindingId(?string $bindingId): static
    {
        $this->bindingId = $bindingId;

        return $this;
    }



}