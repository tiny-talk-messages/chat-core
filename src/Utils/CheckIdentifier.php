<?php

namespace Vesh95\ChatCore\Utils;

use Vesh95\ChatCore\Exceptions\IdentifierIsNotValid;

trait CheckIdentifier
{
    /**
     * @param int $identifier
     * @return void
     * @throws \RuntimeException
     */
    private function checkIdentifier(int $identifier): void
    {
        if ($identifier <= 0) {
            throw new IdentifierIsNotValid("The value must not be lower than zero");
        }
    }
}