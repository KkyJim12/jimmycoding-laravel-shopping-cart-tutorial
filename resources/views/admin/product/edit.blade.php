@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Product</h1>
            <hr />
        </div>
        <div class="col-md-12">
            <form method="post" action="{{route('admin.product.update',[$product->id])}}" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" placeholder="Product Name" name="name" value="{{$product->name}}">
                    @error('name')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Choose Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" @if($category->id == $product->category_id)selected @endif)>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" class="form-control" placeholder="Product Price" name="price" value="{{$product->price}}">
                    @error('price')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" class="form-control" placeholder="Product Quantity" name="quantity" value="{{$product->quantity}}">
                    @error('quantity')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <textarea placeholder="Description" name="description" class="form-control" rows="5">{{$product->description}}</textarea>
                    @error('description')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Product Image</label>
                    <br />
                    <input type="file" placeholder="Product Image" name="image">
                    @error('image')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-warning w-100">Update Product</button>
            </form>
        </div>
    </div>
</div>
@endsection