<?php

namespace App\Entities\Eloquents;

use App\Entities\Eloquents\Relations\BookRelation;

class Book extends BaseEntities
{
    use BookRelation;

    protected $table = '';

    protected $fillable = [

    ];
}
