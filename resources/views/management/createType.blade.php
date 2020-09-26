@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
            <i class="fas fa-caravan"></i>Create a Trailer Type
            <hr>
            <form action="/management/type" method="POST" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
                <label for="typeName">Type Name</label>
                <input type="text" name="name" class="form-control" placeholder="Type...">
            </div>
            <label for="typePrice">Price per km</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">$</span>
                </div>
                <input type="text" name="price" class="form-control" aria-label="Amount">
                <div class="input-group-append">
                <span class="input-group-text">.00</span>
                </div>
                </div>
                <label for="TypeImage">Image</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input"
                        id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Decripton">Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Description...">
                </div>

                <div class="form-group">
                    <label for="Category">Category</label>
                    <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <div>
        </div>
    </div>
@endsection 