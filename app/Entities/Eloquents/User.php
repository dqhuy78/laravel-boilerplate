<?php

namespace App\Entities\Eloquents;

use App\Entities\Eloquents\Relations\UserRelation;

class User extends BaseEntities
{
    use UserRelation;

    protected $table = '';

    protected $fillable = [

    ];
}
