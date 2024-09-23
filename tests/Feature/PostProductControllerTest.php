<?php
namespace Tests\Feature;

use Tests\TestCase;
use Src\Product\Application\Create\CreateProductUseCase;
use Src\Product\Domain\Contracts\ProductRepositoryContract;
use Src\Product\Domain\Product;
use PHPUnit\Framework\MockObject\MockObject;

class PostProductControllerTest extends TestCase
{
    public function test_it_creates_a_product()
    {
        
        /** @var ProductRepositoryContract|MockObject $repositoryMock */
        $repositoryMock = $this->createMock(ProductRepositoryContract::class);

        
        $repositoryMock->expects($this->once())
                       ->method('save')
                       ->with($this->isInstanceOf(Product::class));

        
        $createProductUseCase = new CreateProductUseCase($repositoryMock);

        
        $createProductUseCase->__invoke('Test Product', 'A product for testing', 100.50);

        
        $this->assertTrue(true);
    }
}
