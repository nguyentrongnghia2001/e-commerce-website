<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface;
use App\Services\BaseService;
use App\Models\User;

class UserService extends BaseService implements UserServiceInterface   
{
    public $repository;

    public function __construct(UserRepositoryInterface $UserRepository)
    {
        $this->repository = $UserRepository;
    }

    public function existsByEmail($email)
    {
        return User::where('email', $email)->exists();
    }
}
