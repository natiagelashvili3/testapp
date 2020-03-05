@extends('admin.layout')

@section('content')
    <div class="col-lg-12 text-right">
        <a class="btn btn-primary" style="margin-bottom: 20px;" href="{{ route('admin.blog.create') }}">Add</a>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Blogs</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th class="avatar">Title</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td class="serial">{{ $blog['id'] }}</td>
                                <td>{{ $blog['title'] }}</td>
                                <td>
                                    <a href="">
                                        <span class="badge badge-complete">edit</span>
                                    </a>
                                    <span class="badge badge-danger">delete</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
