<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class PaymentAmountInfo
{

    /**
     * @var int | null
     * @Serializer\Type("int")
     */
    private ?int $approvedAmount;

    /**
     * @var int | null
     *  @Serializer\Type("int")
     */
    private ?int $depositedAmount;

    /**
     * @var int | null
     *  @Serializer\Type("int")
     */
    private ?int $refundedAmount;

    /**
     * @var string | null
     *  @Serializer\Type("string")
     */
    private null|string|int $paymentState;

    /**
     * @return int|null
     */
    public function getApprovedAmount(): ?int
    {
        return $this->approvedAmount;
    }

    /**
     * @param int|null $approvedAmount
     * @return PaymentAmountInfo
     */
    public function setApprovedAmount(?int $approvedAmount): PaymentAmountInfo
    {
        $this->approvedAmount = $approvedAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDepositedAmount(): ?int
    {
        return $this->depositedAmount;
    }

    /**
     * @param int|null $depositedAmount
     * @return PaymentAmountInfo
     */
    public function setDepositedAmount(?int $depositedAmount): PaymentAmountInfo
    {
        $this->depositedAmount = $depositedAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRefundedAmount(): ?int
    {
        return $this->refundedAmount;
    }

    /**
     * @param int|null $refundedAmount
     * @return PaymentAmountInfo
     */
    public function setRefundedAmount($refundedAmount): static
    {
        $this->refundedAmount = $refundedAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentState(): ?string
    {
        return $this->paymentState;
    }

    /**
     * @param string|null $paymentState
     * @return PaymentAmountInfo
     */
    public function setPaymentState($paymentState): static
    {
        $this->paymentState = $paymentState;

        return $this;
    }

}
