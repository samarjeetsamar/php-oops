<?php

interface PaymentGateway {
   	public function charge($amount);
}

class StripePaymentGateway implements PaymentGateway {
   	public function charge($amount) {
      // use Stripe API to charge $amount
   	}
}

class PaypalPaymentGateway implements PaymentGateway {
   	public function charge($amount) {
      // use PayPal API to charge $amount
   	}
}

class Order {
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway) {

        print_r($paymentGateway);
        $this->paymentGateway = $paymentGateway;
    }

    public function place() {
        $data = $this->paymentGateway->charge($this->total());
        // place the order
    }

    private function total(){
        return 20;
    }
}

$stripeGateway = new StripePaymentGateway();
$order = new Order($stripeGateway);
$order->place();