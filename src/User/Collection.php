<?php

namespace Vesh95\ChatCore\User;

use Traversable;

/**
 * User collection interface
 */
interface Collection extends \Vesh95\ChatCore\Common\Collection
{
    /**
     * @return Traversable<Id, Entity>
     */
    public function getIterator(): Traversable;
}