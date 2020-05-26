<?php

declare(strict_types = 1);

namespace Service\CheckoutFacade;

class CheckoutFacade {
  private $billing;
  private $discount;
  private $communication;
  private $security;

  public function __construct($billing, $discount, $communication, $security) {
    $this->billing = $billing;
    $this->discount = $discount;
    $this->communication = $communication;
    $this->security = $security;
  }
}
