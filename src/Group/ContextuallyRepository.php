<?php

namespace Vesh95\ChatCore\Group;

use Vesh95\ChatCore\User\Collection as UserCollection;
use Vesh95\ChatCore\User\Id as UserId;

/**
 * Repository interface in the context of a specific group
 */
interface ContextuallyRepository
{
    /**
     * Get users of group
     * @param int $offset
     * @param int|null $limit
     * @return UserCollection
     */
    public function getUsers(int $offset, ?int $limit): UserCollection;

    /**
     * Append user to group
     * @param UserId $id
     * @return bool
     */
    public function appendUser(UserId $id): bool;

    /**
     * Remove user from group
     * @param UserId $id
     * @return bool
     */
    public function removeUser(UserId $id): bool;

    /**
     * Get contextual group id
     * @return Id
     */
    public function getGroupId(): Id;
}