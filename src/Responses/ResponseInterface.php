<?php

namespace Stev\BTIPay\Responses;

interface ResponseInterface
{

    /*
     * 1 Phase
     */
    const STATUS_CREATED = 'CREATED';
    const STATUS_DEPOSITED = 'DEPOSITED';
    const STATUS_REFUNDED = 'REFUNDED';
    const STATUS_DECLINED = 'DECLINED';

    /*
     * 2 Phase
     */
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_REVERSED = 'REVERSED';

}