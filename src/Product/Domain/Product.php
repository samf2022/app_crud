<?php

namespace Src\Product\Domain;

use Src\Product\Domain\ValueObjects\ProductDescription;
use Src\Product\Domain\ValueObjects\ProductName;
use Src\Product\Domain\ValueObjects\ProductPrice;

class Product
{
    private $name;
    private  $description;
    private  $price;

    public function __construct(ProductName $name, ProductDescription $description, ProductPrice $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function name(): ProductName
    {
        return $this->name;
    }

    public function description(): ProductDescription
    {
        return $this->description;
    }

    public function price(): ProductPrice
    {
        return $this->price;
    }

    public static function create(ProductName $name, ProductDescription  $description, ProductPrice $price): Product
    {
        return new self($name, $description, $price);
    }
}