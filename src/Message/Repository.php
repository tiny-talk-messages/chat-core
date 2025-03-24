<?php

namespace Vesh95\ChatCore\Message;

use Vesh95\ChatCore\Exceptions\EntityNotFound;

/**
 * Messages repository interface
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
     */
    public function create(Data $data): Entity;

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