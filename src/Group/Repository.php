<?php

namespace Vesh95\ChatCore\Group;

use Vesh95\ChatCore\Exceptions\EntityAlreadyExists;
use Vesh95\ChatCore\Exceptions\EntityNotFound;

/**
 * Group repository interface
 */
interface Repository extends \Countable
{
    /**
     * @param int $offset
     * @param int $limit
     * @return Collection<
     */
    public function all(int $offset, int $limit): Collection;

    /**
     * @param Id $id
     * @return Entity|null
     * @throws EntityNotFound
     */
    public function get(Id $id): ?Entity;

    /**
     * @param Data $data
     * @return Entity|null
     * @throws EntityAlreadyExists
     */
    public function add(Data $data): ?Entity;

    /**
     * @param Id $id
     * @param Data $data
     * @return bool
     * @throws EntityNotFound
     */
    public function update(Id $id, Data $data): bool;

    /**
     * @param Id $id
     * @return bool
     * @throws EntityNotFound
     */
    public function delete(Id $id): bool;
}