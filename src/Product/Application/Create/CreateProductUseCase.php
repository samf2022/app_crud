<?php

namespace Src\Product\Application\Create;

use Src\Product\Domain\Contracts\ProductRepositoryContract;
use Src\Product\Domain\Product;
use Src\Product\Domain\ValueObjects\ProductName;
use Src\Product\Domain\ValueObjects\ProductDescription;
use Src\Product\Domain\ValueObjects\ProductPrice;

final class CreateProductUseCase
{
    private $repository;

    public function __construct(ProductRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $ProductName, string $ProductDescription, string $ProductPrice)
    {
        $name = new ProductName($ProductName);
        $description = new ProductDescription($ProductDescription);
        $price = new ProductPrice($ProductPrice);

        $Product = Product::create($name, $description, $price);

        $this->repository->save($Product);
    }
}