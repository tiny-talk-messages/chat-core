<?php

namespace Vesh95\ChatCore\User;

/**
 * User data class
 */
readonly class Data
{
    /**
     * @param string $username
     */
    public function __construct(public string $username)
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->username;
    }
}