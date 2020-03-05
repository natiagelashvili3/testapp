<?php


namespace App\Repositories\Blog;


use App\Models\Modules\Blog;

class BlogRepository implements BlogRepositoryInterface
{

    public function all()
    {
        return Blog::all()->toArray();
    }

    public function store(array $data)
    {
        $data = Blog::create([
            'title' => $data['title'],
            'description' => $data['description']
        ]);

        return $data;
    }

}
