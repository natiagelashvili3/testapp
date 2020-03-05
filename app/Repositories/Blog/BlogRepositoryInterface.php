<?php


namespace App\Repositories\Blog;


interface BlogRepositoryInterface
{

    public function all();

    public function store(array $data);

}
