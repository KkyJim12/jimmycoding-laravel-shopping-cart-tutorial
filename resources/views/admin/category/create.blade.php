@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('admin.category.store')}}">
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" placeholder="Category Name" name="name">
                    @error('name')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category Sort</label>
                    <input type="number" class="form-control" placeholder="Category Sort" name="sort">
                    @error('sort')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                @csrf
                <button type="submit" class="btn btn-success w-100">Create Category</button>
            </form>
        </div>
    </div>
</div>
@endsection