<?php

namespace Vesh95\ChatCore\User;

use Vesh95\ChatCore\Exceptions\EntityAlreadyExists;
use Vesh95\ChatCore\Exceptions\EntityNotFound;

/**
 * User repository interface
 */
interface Repository
{
    /**
     * @param int $offset
     * @param int $limit
     * @return Collection
     */
    public function list(int $offset, int $limit): Collection;

    /**
     * @param Id $id
     * @return Entity
     * @throws EntityNotFound
     */
    public function get(Id $id): Entity;

    /**
     * @param Data $data
     * @return Entity
     * @throws EntityAlreadyExists
     */
    public function add(Data $data): Entity;

    /**
     * @param Id $id
     * @param Data $data
     * @return Entity
     * @throws EntityNotFound
     */
    public function update(Id $id, Data $data): Entity;

    /**
     * @param Id $id
     * @return bool
     * @throws EntityNotFound
     */
    public function delete(Id $id): bool;
}