<?php

declare(strict_types=1);

namespace MusheAbdulHakim\GoHighLevel\Contracts\Resources\Users;

interface UsersContract
{
    /**
     * Get User
     *
     *
     * @param string $userId
     * @return array<string,number>|string
     * @see https://highlevel.stoplight.io/docs/integrations/a815845536249-get-user
     */
    public function get(string $userId): array|string;

    /**
     * Update User
     *
     *
     * @param string $userId
     * @param array<string,number> $params
     * @return array<string,number>|string
     * @see https://highlevel.stoplight.io/docs/integrations/52e75431abf04-update-user
     */
    public function update(string $userId, array $params = []): array|string;

    /**
     * Delete User
     *
     *
     * @param string $userId
     * @return array<string,number>|string
     * @see https://highlevel.stoplight.io/docs/integrations/c0ec81b013379-delete-user
     */
    public function delete(string $userId): array|string;

    /**
     * Get User by Location
     *
     *
     * @param string $locationId
     * @return array<string,number>|string
     * @see https://highlevel.stoplight.io/docs/integrations/2b1f72be935aa-get-user-by-location
     */
    public function byLocation(string $locationId): array|string;

    /**
     * Create User
     *
     * @param string $companyId
     * @param array<string,number> $params
     * @return array<string,number>|string
     * @see https://highlevel.stoplight.io/docs/integrations/cf3f982337757-create-user
     */
    public function create(string $companyId, array $params): array|string;

    /**
     * Search Users
     *
     *
     * @param string $companyId
     * @param array<string,number> $params
     * @return array<string,number>|string
     * @see https://highlevel.stoplight.io/docs/integrations/6fac93869cd3f-search-users
     */
    public function search(string $companyId, array $params = []): array|string;
}
