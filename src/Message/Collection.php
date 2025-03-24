<?php

namespace Vesh95\ChatCore\Message;

use Traversable;

interface Collection extends \Vesh95\ChatCore\Common\Collection
{
    /**
     * @return Traversable<Id, Entity>
     */
    public function getIterator(): Traversable;
}