@extends('navbar')

@section('title','Cart')

@php
    $totalPrice = 0;
    $count = 0;
@endphp

@section('content')
    <div class="container" style="margin-top: 1%; margin-bottom: 1%;">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row justify-content-center">
            <?php foreach ($carts as $cart) : ?> 
                @if(auth()->user()->id === $cart->user_id)
                    <?php foreach ($shoes as $shoe) : ?> 
                        <?php if ($cart->shoes_id == $shoe->shoes_id) : ?>
                            <div class="card d-flex flex-row align-items-center mt-2" style="width: 55%;">
                                <img src="/{{ $shoe->image }}" alt="" style="width: 25%;">
                                <div class="card-body">
                                    <h4 class="card-text">{{ $shoe->name }}</h4>
                                    <p class="card-text m-0">Quantity: {{ $cart->qty }}</p>
                                    <p class="card-text m-0">Total Price: IDR {{ $cart->subPrice }}</p>
                                </div>
                                    <form method="POST" action="/cart">
                                        @csrf
                                        <input type="hidden" name="cartID" value="{{ $cart->cart_id }}">
                                        <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                            </div>
                            <?php $totalPrice += $cart->subPrice ?>
                            <?php $count++ ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                @endif
            <?php endforeach; ?>
        </div>
    </div>

    <div class="bg-white d-flex justify-content-center p-3">
        <div class="align-item-center">
            <p class="m-2">Total Price: IDR {{ $totalPrice }}</p>
        </div>
        @if($count > 0)
            <form action="/payment" method="POST">
                @csrf
                <?php foreach ($carts as $cart) : ?> 
                    @if(auth()->user()->id === $cart->user_id)
                        <?php foreach ($shoes as $shoe) : ?> 
                            <?php if ($cart->shoes_id == $shoe->shoes_id) : ?>
                                <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="shoesName[]" value="{{ $shoe->name }}">
                                <input type="hidden" name="quantity[]" value="{{ $cart->qty }}">
                                <input type="hidden" name="subprice[]" value="{{ $cart->subPrice }}">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    @endif
                <?php endforeach; ?>
                <div class="align-item-center">
                    <button type="submit" class="btn btn-outline-success">Purchase</button>
                </div>
            </form>
        @endif
    </div>
@endsection