<?php

namespace Vesh95\ChatCore\Message;

use Vesh95\ChatCore\User\Entity as UserEntity;

/**
 * Message entity
 */
readonly final class Entity
{
    public function __construct(
        public Id $id,
        public Data $data,
        public UserEntity $user,
    ) {
    }

    public function __toString(): string
    {
        return $this->data->text;
    }
}