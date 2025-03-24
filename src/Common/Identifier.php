<?php

namespace Vesh95\ChatCore\Common;

interface Identifier
{
    public function getValue(): mixed;

    public function __toString(): string;

    public function equals(self $identifier): bool;
}