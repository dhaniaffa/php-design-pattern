<?php

namespace Src\Creational\Factory\Payment\Interface;

interface PaymentInterface
{
    public function getStatus();
    public function sendIssue();
}
