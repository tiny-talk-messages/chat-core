<?php

namespace Vesh95\ChatCore\Message;

use Vesh95\ChatCore\User\Id as UserId;

/**
 * Message data
 */
readonly final class Data
{
    /**
     * @param UserId $user
     * @param string $text
     */
    public function __construct(
        public UserId $user,
        public string $text
    )
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->text;
    }
}