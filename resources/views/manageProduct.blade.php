@extends('navbar')

@section('title','Manage Product')

@section('content')
<div class="atas">
    <form action="/manageProduct">
        <input type="text" placeholder="Search Shoes..." name="search" id="" style="width:320px;margin-top: 20px;justify-content: center;margin-left: 47rem">
        <button type="submit">Search</button>
    </form>

    <div class="card-body">
        <a href="{{url('addProduct/')}}" style="margin-top:20px;margin-left: 55.5rem" class="btn btn-secondary">Add Product</a>
    </div>
</div>

<div style="margin-top: 50px">
    <div class="row" style="justify-content:space-evenly">
        @foreach ($shoes as $s)
            <div class="card" style="width: 18rem;margin-top:25px">
                <img class="card-img-top" src="{{url($s->image)}}" alt="Shoes Image">
            <div class="card-body">
                <h5 class="card-title">{{$s->name}}</h5>
                <p class="card-text">{{$s->detail}}</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <a href="{{url('updateProduct/'.$s->shoes_id)}}" style="margin-top: 10px" class="btn btn-secondary">Update</a>
                </div>
                <div class="row">
                    <a href="{{url('delete/'.$s->shoes_id)}}" style="margin-top: 10px" class="btn btn-secondary">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="post p-4" style="margin-left: 7.5rem">
    {{$shoes->links()}}
</div>

@endsection
