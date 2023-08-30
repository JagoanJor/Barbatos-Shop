@extends('navbar')

@section('title','Update Product')

@section('content')
<div class="card-body">
    <a href="/manageProduct" style="margin-top:20px;margin-left: 2rem" class="btn btn-secondary">Back</a>
</div>
<div class="form-container p-4">
    <h2 class="d-flex justify-content-center">Update Product</h2>
    <form action="/updateProduct/{{$shoes->cat_id}}" method="POST" style="margin-top: 20px; width:100%" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top:20px;margin-left: 30rem;font-weight: 500">Name</label>
            <input type="text" name="shoes_name" value="{{$shoes->name}}"style="width:875px;margin-left: 30rem">
        </div>

        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top:20px;margin-left: 30rem;font-weight: 500">Category</label>
            <select name="shoes_cat" id="shoes_cat"style="margin-top:5px;margin-left: 30rem;font-weight: 500">
                <option value="">Select Category</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->cat_name}}">{{$cat->cat_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top: 30px;margin-left: 30rem;font-weight: 500" >Detail</label>
            <textarea name="shoes_detail" style="width:875px;margin-left: 30rem"cols="75" rows="5">{{$shoes->detail}}</textarea>
        </div>

        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top:30px;margin-left: 30rem;font-weight: 500" >Price</label>
            <input type="text" name="shoes_price" value="{{$shoes->price}}"style="width:875px;margin-left: 30rem">
        </div>

        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top:30px;margin-left: 30rem;font-weight: 500" >Photo</label>
            <div class="chose d-flex"style="margin-left:30rem">
                <input type="file" name="shoes_image"value="{{$shoes->image}}">
            </div>
        </div>

        <button type="submit" style="width: 100px;margin-top: 30px;margin-left: 55.5rem">Update</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>
@endsection
