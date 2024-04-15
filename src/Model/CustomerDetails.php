<?php

namespace Stev\BTIPay\Model;

use JMS\Serializer\Annotation as Serializer;
use Stev\BTIPay\Exceptions\InvalidValueException;
use Stev\BTIPay\Util\Validator;

class CustomerDetails
{

    /**
     * @var string
     *  @Serializer\Type("string")
     */
    private string $email;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $phone;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $contact;

    /**
     * @Serializer\Type("Stev\BTIPay\Model\DeliveryInfo")
     */
    private ?DeliveryInfo $deliveryInfo = null;

    /**
     * @var BillingInfo
     * @Serializer\Type("Stev\BTIPay\Model\BillingInfo")
     */
    private BillingInfo $billingInfo;

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return CustomerDetails
     * @throws InvalidValueException
     */
    public function setEmail($email): static
    {
        if (null !== $email) {
            $this->email = Validator::validateEmail('customerDetails.email', $email);
        } else {
            $this->email = $email;
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getPhone(): int
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     * @return CustomerDetails
     */
    public function setPhone($phone): static
    {
        $this->phone = (int)$phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContact(): ?string
    {
        return $this->contact;
    }

    /**
     * @param string|null $contact
     * @return CustomerDetails
     */
    public function setContact($contact): static
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?DeliveryInfo
    {
        return $this->deliveryInfo;
    }

    /**
     * @param DeliveryInfo|null $deliveryInfo
     * @return CustomerDetails
     */
    public function setDeliveryInfo(?DeliveryInfo $deliveryInfo): static
    {
        $this->deliveryInfo = $deliveryInfo;

        return $this;
    }

    /**
     * @return BillingInfo
     */
    public function getBillingInfo(): BillingInfo
    {
        return $this->billingInfo;
    }

    /**
     * @param BillingInfo $billingInfo
     * @return CustomerDetails
     */
    public function setBillingInfo(BillingInfo $billingInfo): static
    {
        $this->billingInfo = $billingInfo;

        return $this;
    }

}