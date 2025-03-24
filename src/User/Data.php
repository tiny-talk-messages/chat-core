<?php

namespace Vesh95\ChatCore\User;

readonly class Data
{
    public function __construct(public Id $id, public string $username)
    {
    }

    public function __toString(): string
    {
        return $this->username;
    }
}