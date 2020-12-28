<?php


namespace Kaser\Tinkoff;


class TinkoffService extends TinkoffMerchantAPI
{
    public function __construct($terminalKey, $secretKey, $api_url)
    {
        parent::__construct($terminalKey, $secretKey, $api_url);
    }
}