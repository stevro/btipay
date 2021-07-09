<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class PaymentAmountInfo
{

    /**
     * @var int | null
     * @Serializer\Type("int")
     */
    private $approvedAmount;
    /**
     * @var int | null
     *  @Serializer\Type("int")
     */
    private $depositedAmount;
    /**
     * @var int | null
     *  @Serializer\Type("int")
     */
    private $refundedAmount;
    /**
     * @var string | null
     *  @Serializer\Type("int")
     */
    private $paymentState;

    /**
     * @return int|null
     */
    public function getApprovedAmount()
    {
        return $this->approvedAmount;
    }

    /**
     * @param int|null $approvedAmount
     * @return PaymentAmountInfo
     */
    public function setApprovedAmount($approvedAmount)
    {
        $this->approvedAmount = $approvedAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDepositedAmount()
    {
        return $this->depositedAmount;
    }

    /**
     * @param int|null $depositedAmount
     * @return PaymentAmountInfo
     */
    public function setDepositedAmount($depositedAmount)
    {
        $this->depositedAmount = $depositedAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRefundedAmount()
    {
        return $this->refundedAmount;
    }

    /**
     * @param int|null $refundedAmount
     * @return PaymentAmountInfo
     */
    public function setRefundedAmount($refundedAmount)
    {
        $this->refundedAmount = $refundedAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * @param string|null $paymentState
     * @return PaymentAmountInfo
     */
    public function setPaymentState($paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }



}