<?php 
namespace App\Http\Services;

use App\Http\Repositories\UserRepository;
use App\User;


class UserService
{
    protected $userRepo;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepo->getAll();
    }
}
?>