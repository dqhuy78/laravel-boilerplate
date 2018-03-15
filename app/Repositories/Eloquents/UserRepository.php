<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Entities\Eloquents\User;

class UserRepository extends BaseEloquentRepository implements UserRepositoryInterface
{
    public function model()
    {
        return new User;
    }
}
