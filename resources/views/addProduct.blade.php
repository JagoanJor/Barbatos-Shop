@extends('navbar')

@section('title','Add Product')

@section('content')
<div class="card-body">
    <a href="/manageProduct" style="margin-top:20px;margin-left: 2rem" class="btn btn-secondary">Back</a>
</div>
<div class="form-container p-4">
    <h2 class="d-flex justify-content-center">Add Product</h2>
    <form action="{{url('addProduct/')}}" method="POST" style="margin-top: 20px; width:100%" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top:20px;margin-left: 32rem;font-weight: 500">Name</label>
            <input type="text" name="shoes_name" style="width:875px;margin-left: 32rem">
        </div>

        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top:20px;margin-left: 32rem;font-weight: 500">Category</label>
            <select name="shoes_cat" id="shoes_cat"style="margin-top:5px;margin-left: 32rem;font-weight: 500">
                <option value="">Select Category</option>
                @foreach ($categories as $cat)
                    <option value="{{$cat->cat_name}}">{{$cat->cat_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top: 30px;margin-left: 32rem;font-weight: 500" >Detail</label>
            <textarea name="shoes_detail"  style="width:875px;margin-left: 32rem"cols="75" rows="5"></textarea>
        </div>

        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top:30px;margin-left: 32rem;font-weight: 500" >Price</label>
            <input type="text" name="shoes_price" style="width:875px;margin-left: 32rem">
        </div>

        <div class="update-menu">
            <label for="" style="display:block; margin-bottom:5px;margin-top:30px;margin-left: 32rem;font-weight: 500" >Photo</label>
            <div class="chose d-flex"style="margin-left:32rem">
                <input type="file" name="shoes_image">
            </div>
        </div>

        <button type="submit" style="width: 100px;margin-top: 30px;margin-left: 55.5rem">Add</button>

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
