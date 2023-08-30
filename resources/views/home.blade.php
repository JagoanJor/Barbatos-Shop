@extends('navbar')

@section('title','Home')

@section('content')
    <div class="container mt-3">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
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
        <?php foreach ($categories as $category) : ?>
            <div class="card mt-3">
                <div class="card-header">
                    <p>{{$category->cat_name}} <a href="/category/{{ $category->cat_id }}" class="text-decoration-none">View All</a></p>
                </div>
                <div class="row row-cols-md-5 flex-row flex-nowrap overflow-auto productCollection">
                    <?php foreach ($shoes as $shoe) : ?>
                        <?php if ($category->cat_id == $shoe->cat_id) : ?>
                            <a href="/shoes/{{ $shoe->shoes_id }}" class="text-decoration-none text-body">
                                <div class="col">
                                    <div class="card productList" style="max-width: 200px;">
                                        <img src="{{ $shoe->image }}" alt="">
                                        <div class="card-body">
                                            <p class="card-text">{{ $shoe->name }}</p>
                                            <h6 class="card-text">IDR {{ $shoe->price }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
@endsection