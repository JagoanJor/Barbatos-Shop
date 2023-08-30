@extends('navbar')

@section('title','Category')

@section('content')
    <div class="container mt-3">
        <div class="main-search-input-wrap">
            <div class="main-search-input fl-wrap">
                <form action="/search">
                    <div class="main-search-input-item">
                        <input type="text"  name="search" placeholder="Search Products...">
                    </div>
                    <button class="main-search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>

    <div class="container productCategory">
        <div class="card mt-3">
            <div class="card-header">
                <p>{{$categories->cat_name}} </p>
            </div>
            <div class="row row-cols-1 row-cols-md-5 productCollectionCategory">
                <?php foreach ($shoes as $shoe) : ?>
                    <a href="/shoes/{{ $shoe->shoes_id }}" class="text-decoration-none text-body">
                        <div class="col">
                            <div class="card productList">
                                <img src="/{{ $shoe->image }}" alt="">
                                <div class="card-body">
                                    <p class="card-text">{{ $shoe->name }}</p>
                                    <h6 class="card-text">IDR {{ $shoe->price }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-row-reverse">
        <div class="p-2">{{ $shoes->links() }}</div>
    </div>
@endsection