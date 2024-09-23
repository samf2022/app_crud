<?php

namespace Src\Product\Infrastructure\Repositories;

use App\Models\Product as ProductModel;
use Src\Product\Domain\Contracts\ProductRepositoryContract;
use Src\Product\Domain\Product;

class EloquentProductRepository implements ProductRepositoryContract
{
    private $ProductModel;

    public function __construct(ProductModel $ProductModel)
    {
        $this->ProductModel = $ProductModel;
    }

    public function save(Product $Product): void
    {
        $data = [
            'name' => $Product->name()->value(),
            'description' => $Product->description()->value(),
            'price' => $Product->price()->value()
        ];

        $this->ProductModel->create($data);
    }
}