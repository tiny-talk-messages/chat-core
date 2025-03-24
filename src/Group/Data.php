<?php

namespace Vesh95\ChatCore\Group;

readonly class Data
{
    public function __construct(
        public Id $id,
        public string $name,
    )
    {
    }

    public function __toString(): string
    {
        return $this->name;
    }
}