<?php

namespace Stev\BTIPay\Responses;

interface ResponseInterface
{

    /*
     * 1 Phase
     */
    public const STATUS_CREATED = 'CREATED';
    public const STATUS_DEPOSITED = 'DEPOSITED';
    public const STATUS_REFUNDED = 'REFUNDED';
    public const STATUS_DECLINED = 'DECLINED';

    /*
     * 2 Phase
     */
    public const STATUS_APPROVED = 'APPROVED';
    public const STATUS_REVERSED = 'REVERSED';

}