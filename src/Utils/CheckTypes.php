<?php

namespace Vesh95\ChatCore\Utils;

trait CheckTypes
{
    public function checkType(mixed $check): bool
    {
        return $check instanceof $this;
    }
}