<?php

declare(strict_types=1);

namespace Src\Product\Infrastructure;

use Illuminate\Http\Request;
use Src\Product\Application\Create\CreateProductRequest;
use Src\Product\Application\Create\CreateProductUseCase;

final class ProductPostController
{
    private $useCase;

    public function __construct(CreateProductUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    public function __invoke(Request $request)
    {
        $product = new CreateProductRequest(
            $request->get('name'),
            $request->get('description'),
            $request->get('price')
        );
        
        ($this->useCase)(
            $product->name(),
            $product->description(),
            $product->price()
        );
    }
}