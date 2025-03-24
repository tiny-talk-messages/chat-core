<?php

namespace Vesh95\ChatCore\Utils;

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
            throw new \RuntimeException("The value must not be lower than zero");
        }
    }
}