<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class BindingInfo
{

    /**
     * @var string | null
     *  @Serializer\Type("string")
     */
    private $clientId;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $bindingId;

    /**
     * @return string|null
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     * @return BindingInfo
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBindingId()
    {
        return $this->bindingId;
    }

    /**
     * @param string|null $bindingId
     * @return BindingInfo
     */
    public function setBindingId($bindingId)
    {
        $this->bindingId = $bindingId;

        return $this;
    }



}