<?php

namespace Vesh95\ChatCore\User;

/**
 * User entity
 */
readonly final class Entity
{
    /**
     * @param Id $id
     * @param Data $data
     */
    public function __construct(
        public Id $id,
        public Data $data,
    )
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->data->username;
    }
}