<?php

namespace App\Services;

use App\DAO\UserDAO;

class UserService
{
    private $userDAO;

    public function __construct(UserDAO $userDAO)
    {
        $this->userDAO = $userDAO;
    }

    public function getAllUsers()
    {
        return $this->userDAO->getAll();
    }

    public function createUser(array $data)
    {
        return $this->userDAO->create($data);
    }

    public function getUserById($id)
    {
        return $this->userDAO->findById($id);
    }

    public function updateUser($id, array $data)
    {
        return $this->userDAO->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->userDAO->delete($id);
    }
}
