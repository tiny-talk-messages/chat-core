<?php

namespace Vesh95\ChatCore\Message;

use Vesh95\ChatCore\Common\Identifier;
use Vesh95\ChatCore\Utils\CheckIdentifier;
use Vesh95\ChatCore\Utils\CheckTypes;

readonly class Id implements Identifier
{
    use CheckTypes;
    use CheckIdentifier;

    private int $value;

    public function __construct(int $value)
    {
        $this->checkIdentifier($value);
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function equals(Identifier $identifier): bool
    {
        return $this->checkType($identifier) && $this->value === $identifier->value;
    }
}