<?php

namespace App\Repositories;

interface UserRepository
{
    public function createUser(array $userData);

    public function getUserById(int $userId);

    public function updateUser(int $userId, array $userData);

    public function deleteUser(int $userId);
}
