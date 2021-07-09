<?php

namespace Stev\BTIPay\Model;

use Stev\BTIPay\Util\Validator;

class CustomerDetails
{

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $phone;

    /**
     * @var string | null
     */
    private $contact;

    /**
     * @var DeliveryInfo
     */
    private $deliveryInfo;

    /**
     * @var BillingInfo
     */
    private $billingInfo;

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return CustomerDetails
     */
    public function setEmail($email)
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     * @return CustomerDetails
     */
    public function setPhone($phone)
    {
        $this->phone = (int)$phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string|null $contact
     * @return CustomerDetails
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return DeliveryInfo
     */
    public function getDeliveryInfo()
    {
        return $this->deliveryInfo;
    }

    /**
     * @param DeliveryInfo $deliveryInfo
     * @return CustomerDetails
     */
    public function setDeliveryInfo(DeliveryInfo $deliveryInfo)
    {
        $this->deliveryInfo = $deliveryInfo;

        return $this;
    }

    /**
     * @return BillingInfo
     */
    public function getBillingInfo()
    {
        return $this->billingInfo;
    }

    /**
     * @param BillingInfo $billingInfo
     * @return CustomerDetails
     */
    public function setBillingInfo(BillingInfo $billingInfo)
    {
        $this->billingInfo = $billingInfo;

        return $this;
    }


}