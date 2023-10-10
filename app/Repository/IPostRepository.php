<?php

namespace App\Repository;

use App\Models\Post;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

interface IPostRepository 
{
    public function list() : LengthAwarePaginator;
    public function findById($id) : Post;
    public function storeOrUpdate( $id = null, $collection = [], $request);
    public function destroyById($object);
    public function imagestore($request,$object);
}