@extends('backend.backend-master')

@section('title')
Add Category 
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 bg-dark mt-4">
            <h1 class="text-white">All Category <span class="text-success">{{Session::get('msg')}}</span></h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Showing Category Data
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="{{route('category.edit', $category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{route('category.delete', $category->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you Sure To delete this Category?')" >Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
