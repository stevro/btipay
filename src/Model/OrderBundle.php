<?php

namespace Stev\BTIPay\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderBundle
 * @package Stev\BTIPay\Model
 *
 *  @Serializer\ExclusionPolicy("all")
 */
class OrderBundle
{

    /**
     * @var DateTime
     *
     *  @Serializer\Expose
     * @Serializer\Type("DateTime<'Y-m-d', '','U'>")
     */
    private DateTime $orderCreationDate;

    /**
     * @var CustomerDetails
     *  @Serializer\Expose
     * @Serializer\Type("Stev\BTIPay\Model\CustomerDetails")
     */
    private CustomerDetails $customerDetails;

    /**
     * OrderBundle constructor.
     * @param DateTime $orderCreationDate
     * @param CustomerDetails $customerDetails
     */
    public function __construct(DateTime $orderCreationDate, CustomerDetails $customerDetails)
    {
        $this->orderCreationDate = $orderCreationDate;
        $this->customerDetails = $customerDetails;
    }

    /**
     * @return DateTime
     */
    public function getOrderCreationDate(): DateTime
    {
        return $this->orderCreationDate;
    }

    /**
     * @param DateTime $orderCreationDate
     * @return OrderBundle
     */
    public function setOrderCreationDate(DateTime $orderCreationDate): static
    {
        $this->orderCreationDate = $orderCreationDate;

        return $this;
    }

    /**
     * @return CustomerDetails
     */
    public function getCustomerDetails(): CustomerDetails
    {
        return $this->customerDetails;
    }

    /**
     * @param CustomerDetails $customerDetails
     * @return OrderBundle
     */
    public function setCustomerDetails(CustomerDetails $customerDetails): static
    {
        $this->customerDetails = $customerDetails;

        return $this;
    }

}