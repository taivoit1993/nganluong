<?php

namespace QsoftVN\NganLuong\Facades;

use Illuminate\Support\Facades\Facade;

class NLBankCharge extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'BankCharge';
    }
}