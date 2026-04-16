<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    // GET /api/users
    public function index()
    {
        return $this->userService->getAllUsers();
    }

    // POST /api/users
    public function store(Request $request)
    {
        return $this->userService->createUser($request->all());
    }

    // GET /api/users/{id}
    public function show($id)
    {
        return $this->userService->getUserById($id);
    }

    // PUT /api/users/{id}
    public function update(Request $request, $id)
    {
        return $this->userService->updateUser($id, $request->all());
    }

    // DELETE /api/users/{id}
    public function destroy($id)
    {
        $this->userService->deleteUser($id);

        return [
            'message' => 'User deleted successfully'
        ];
    }
}
