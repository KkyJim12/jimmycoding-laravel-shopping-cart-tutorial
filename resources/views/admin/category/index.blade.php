@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Category List</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{route('admin.category.create')}}" class="btn btn-success">Create Category</a>
        </div>
        <div class="col-md-12">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">sort</th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->sort}}</td>
                        <td><a href="{{route('admin.category.edit',[$category->id])}}" class="btn btn-warning">edit</a></td>
                        <td>
                            <form method="post" action="{{route('admin.category.destroy',[$category->id])}}">
                                <button type="submit" class="btn btn-danger">delete</button>
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection