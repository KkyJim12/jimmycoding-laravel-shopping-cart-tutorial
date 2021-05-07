@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Category Manage</h5>
                    <a href="{{route('admin.category.index')}}" class="btn btn-primary w-100">Go !!</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Product Manage</h5>
                    <a href="{{route('admin.product.index')}}" class="btn btn-primary w-100">Go !!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection