<?php

namespace Shared\Domain\ValueObject;

abstract class IntValueObject
{
    private $value;

    public function __construct(int $int)
    {
        $this->value = $int;
    }

    public function value(): int
    {
        return $this->value;
    }
}