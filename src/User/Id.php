<?php

namespace Vesh95\ChatCore\User;

use Vesh95\ChatCore\Common\Identifier;
use Vesh95\ChatCore\Utils\CheckIdentifier;
use Vesh95\ChatCore\Utils\CheckTypes;

/**
 * User identifier value
 */
readonly class Id implements Identifier
{
    use CheckTypes;
    use CheckIdentifier;

    /**
     * @var int
     */
    private int $value;

    /**
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->checkIdentifier($value);
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param Identifier $identifier
     * @return bool
     */
    public function equals(Identifier $identifier): bool
    {
        return $this->checkType($identifier) && $this->value === $identifier->value;
    }
}