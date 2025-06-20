<?php

namespace App\Message;

class TestMessage
{
    public function __construct(
        private readonly string $value,
    ) {}

    public function getValue(): string
    {
        return $this->value;
    }
}
