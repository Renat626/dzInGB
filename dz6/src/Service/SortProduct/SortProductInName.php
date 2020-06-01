<?php

declare(strict_types=1);

namespace Service\SortProduct;
use Service\SortProductInterface;

class SortProductName implements SortProductInterface {
  public function compare(array $productList) {
    function cmp($a, $b)
    {
        return strcmp($a["name"], $b["name"]);
    }

    usort($productList, 'cmp');

    return $productList;
  }
}
