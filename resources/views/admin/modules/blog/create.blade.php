@extends('admin.layout')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Credit Card</strong>
            </div>
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <form action="{{ route('admin.blog.store') }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="control-label mb-1">Title</label>
                                <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label mb-1">Description</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">ADD</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
