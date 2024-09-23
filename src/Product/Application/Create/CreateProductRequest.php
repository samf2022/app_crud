<?php

namespace Src\Product\Application\Create;

final class CreateProductRequest
{
    private string $name;
    private  string $description;
    private  string $price;

    public function __construct($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function price(): string
    {
        return $this->price;
    }
}