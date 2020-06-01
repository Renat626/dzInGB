<?php

declare(strict_types=1);

namespace Service\SortProduct;

interface SortProductInterface
{
  public function compare(array $productList);
}
