<?php

namespace Manhattan\Cur;

use Manhattan\Enums\Code;

class Currency
{
    private Code $isoCode;



    public function __construct(Code $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode(): Code
    {
        return $this->isoCode;
    }

    private function setIsoCode(Code $isoCode):void
    {

        $this->isoCode = $isoCode;
    }


}

$usd = new Currency(Code::EUR);

