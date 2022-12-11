@extends('backend.backend-master')

@section('title')
Edit Category 
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9 bg-dark mt-5">
            <h1 class="text-white">Edit Category <span class="text-success">{{Session::get('msg')}}</span></h1>
            <form action="{{route('category.update', $category->id)}}" method="post" class="py-5">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white" >Category Name :</label>
                  <input type="text" name="name" class="form-control" placeholder="give a category name" value="{{$category->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Update Category</button>
              </form>
        </div>
    </div>
</div>
    
@endsection