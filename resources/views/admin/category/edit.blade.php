@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('admin.category.update',[$category->id])}}">
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" placeholder="Category Name" name="name" value="{{$category->name}}">
                    @error('name')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category Sort</label>
                    <input type="number" class="form-control" placeholder="Category Sort" name="sort" value="{{$category->sort}}">
                    @error('sort')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-warning w-100">Update Category</button>
            </form>
        </div>
    </div>
</div>
@endsection