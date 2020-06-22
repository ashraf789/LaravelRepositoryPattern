<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $this->userRepository->all();
    }

    public function show($id)
    {
        return $this->userRepository->findById($id);
    }

    public function update($id)
    {
        return $this->userRepository->update($id);
    }

    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }
}
