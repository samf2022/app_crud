<?php

namespace Src\Product\Domain\Contracts;
use Src\Product\Domain\Product;
use Src\Product\Domain\ValueObjects\ProductId;

interface ProductRepositoryContract
{
    public function save(Product $Product): void;
}