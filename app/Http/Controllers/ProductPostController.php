<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Src\Product\Infrastructure\ProductPostController as ProductCreateController;

final class ProductPostController
{
    private $productCreateController;

    public function __construct(ProductCreateController $productCreateController)
    {
        $this->productCreateController = $productCreateController;
    }

    public function __invoke(Request $request)
    {
        ($this->productCreateController)($request);
    }
}