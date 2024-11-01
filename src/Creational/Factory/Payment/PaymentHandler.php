<?php

namespace Src\Creational\Factory\Payment;

use Src\Creational\Factory\Payment\Interface\PaymentInterface;

class PaymentHandler
{
    public function getPaymentMethod(string $method): PaymentInterface
    {
        $class = "Src\\Creational\\Factory\\Payment\\Method\\" . ucfirst($method);

        if (!class_exists($class)) {
            throw new \Exception('Class ' . $class . ' not found.');
        }

        return new $class;
    }
}
