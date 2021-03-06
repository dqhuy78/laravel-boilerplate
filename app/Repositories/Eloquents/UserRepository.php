<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Entities\Eloquents\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * The entity associated with this repository.
     *
     * @var object
     */
    public function model()
    {
        return new User;
    }
}
