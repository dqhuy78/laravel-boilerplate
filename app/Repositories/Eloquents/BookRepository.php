<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\BookRepositoryInterface;
use App\Entities\Eloquents\Book;

class BookRepository extends BaseEloquentRepository implements BookRepositoryInterface
{
    public function model()
    {
        return new Book;
    }
}
