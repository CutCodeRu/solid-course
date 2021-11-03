<?php

namespace App\PaymentGateways;

use Leeto\CashBox\PaymentGatewayInterface;

/**
 * @method  setPaymentDescription(string $string)
 * @method  setAmount(float $float)
 */
class PayPal implements PaymentGatewayInterface
{

    public function credentials($params = [])
    {
        // TODO: Implement credentials() method.
    }

    public function getRequest()
    {
        // TODO: Implement getRequest() method.
    }

    public function getReceiptItems(): array
    {
        // TODO: Implement getReceiptItems() method.
    }

    public function getPaymentData(): array
    {
        // TODO: Implement getPaymentData() method.
    }

    public function getPaymentObject()
    {
        // TODO: Implement getPaymentObject() method.
    }

    public function createPayment(): string
    {
        // TODO: Implement createPayment() method.
    }

    public function capturePayment(callable $callback): array
    {
        // TODO: Implement capturePayment() method.
    }

    public function cancelPayment()
    {
        // TODO: Implement cancelPayment() method.
    }

    public function createRefund()
    {
        // TODO: Implement createRefund() method.
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method  setPaymentDescription(string $string)
        // TODO: Implement @method  setAmount(float $float)
    }
}