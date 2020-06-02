<?php 
namespace App\Http\Services\Admin;

use App\Http\Repositories\Admin\UserRepository;
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