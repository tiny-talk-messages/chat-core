<?php

namespace Vesh95\ChatCore\Group;

use Traversable;

interface Collection extends \Countable, \IteratorAggregate, \ArrayAccess
{
    /**
     * @return Traversable<Id, Entity>
     */
    public function getIterator(): Traversable;

    /**
     * Join collections
     * @param Collection $other
     * @return Collection joined collection
     */
    public function join(self $other): Collection;
}