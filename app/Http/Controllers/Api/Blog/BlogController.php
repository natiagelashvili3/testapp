<?php


namespace App\Http\Controllers\Api\Blog;

use App;
use App\Http\Controllers\Controller;
use App\Services\Blog\BlogService;

class BlogController extends Controller
{

    public function index()
    {
        return App::make(BlogService::class)->all();
    }
}
