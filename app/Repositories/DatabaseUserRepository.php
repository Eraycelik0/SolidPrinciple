<?php

namespace App\Repositories;

class DatabaseUserRepository implements UserRepository
{
    public function createUser(array $userData)
    {
        // Veritabanında kullanıcı oluşturma işlemini gerçekleştir
    }

    public function getUserById(int $userId)
    {
        // Belirli bir kullanıcıyı veritabanından al
    }

    public function updateUser(int $userId, array $userData)
    {
        // Kullanıcı bilgilerini güncelle
    }

    public function deleteUser(int $userId)
    {
        // Kullanıcıyı veritabanından sil
    }
}
