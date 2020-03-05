<?php


namespace App\Services\Blog;


use App\Repositories\Blog\BlogRepositoryInterface;
use App\Services\MainService;

class BlogService extends MainService
{
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function all() {
        return $this->blogRepository->all();
    }

    public function store($data) {
        $data = $this->blogRepository->store($data);

        return response($data);
    }
}
