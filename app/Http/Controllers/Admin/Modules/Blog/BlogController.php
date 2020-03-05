<?php

namespace App\Http\Controllers\Admin\Modules\Blog;

use App\Http\Controllers\Admin\AdminController;
use App\Services\Blog\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BlogController extends AdminController
{
    public function index()
    {
        $blogs = App::make(BlogService::class)->all();
        return view('admin.modules.blog.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('admin.modules.blog.create');
    }

    public function store(Request $request)
    {
        $valid = [
            'title' => 'required',
            'description' => 'required'
        ];

        $request->validate($valid);

        $data = App::make(BlogService::class)->store($request->all());

        if ($data) {
            return redirect()->route('admin.blog.index');
        }

    }
}
