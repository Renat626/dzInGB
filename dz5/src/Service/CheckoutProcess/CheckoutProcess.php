<?php

declare(strict_types = 1);

namespace Services\CheckoutProcess;
use Service\Order\Basket;
use Model\Entity\Product;

class CheckoutProcess {
  private $discount;
  private $billing;
  private $security;
  private $communication;

  public function __construct($discount, $billing, $security, $communication) {
    $totalPrice = 0;
    foreach ($this->getProductsInfo() as $product) {
        $totalPrice += $product->getPrice();
    }

    $this->discount = $this->discount->getDiscount();
    $totalPrice = $totalPrice - $totalPrice / 100 * $this->discount;

    $this->billing->pay($totalPrice);

    $user = $this->security->getUser();
    $this->communication->process($user, 'checkout_template');
  }
}
