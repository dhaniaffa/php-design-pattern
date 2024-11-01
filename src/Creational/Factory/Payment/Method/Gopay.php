<?php

namespace Src\Creational\Factory\Payment\Method;

use Src\Creational\Factory\Payment\Interface\PaymentInterface;

class Gopay implements PaymentInterface
{
    public function getStatus(): bool
    {
        return true;
    }

    public function sendIssue(): bool
    {
        return true;
    }
}
