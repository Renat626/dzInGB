<?php

declare(strict_types=1);

namespace Service\SortProduct;
use Service\SortProductInterface;

class SortProductPrice implements SortProductInterface {
  public function compare(array $productList) {
    usort($productList, function($a,$b){
        return ($a['price']-$b['price']);
    });

    return $productList;
  }
}
