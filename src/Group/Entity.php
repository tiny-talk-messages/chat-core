<?php

namespace Vesh95\ChatCore\Group;

readonly final class Entity
{
    public function __construct(
        public Id $id,
        public Data $data
    )
    {
    }

    public function __toString(): string
    {
        return $this->data->name;
    }
}