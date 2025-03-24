<?php

namespace Vesh95\ChatCore\Message;

use Vesh95\ChatCore\User\Data;

readonly class Data
{
    public function __construct(
        public Id     $id,
        public Data   $user,
        public string $text
    )
    {
    }

    public function __toString(): string
    {
        return $this->text;
    }
}