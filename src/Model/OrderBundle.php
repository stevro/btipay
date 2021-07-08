<?php

namespace Stev\BTIPay\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class OrderBundle
{

    /**
     * @var DateTime
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private $orderCreationDate;

    /**
     * @var CustomerDetails
     */
    private $customerDetails;

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
    public function getOrderCreationDate()
    {
        return $this->orderCreationDate;
    }

    /**
     * @param DateTime $orderCreationDate
     * @return OrderBundle
     */
    public function setOrderCreationDate(DateTime $orderCreationDate)
    {
        $this->orderCreationDate = $orderCreationDate;

        return $this;
    }

    /**
     * @return CustomerDetails
     */
    public function getCustomerDetails()
    {
        return $this->customerDetails;
    }

    /**
     * @param CustomerDetails $customerDetails
     * @return OrderBundle
     */
    public function setCustomerDetails(CustomerDetails $customerDetails)
    {
        $this->customerDetails = $customerDetails;

        return $this;
    }


}