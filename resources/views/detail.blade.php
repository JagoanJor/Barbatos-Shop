@extends('navbar')

@section('title','Detail')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 10%;">
        <div class="card detail d-flex flex-row align-items-center" style="width: 50%;">
            <img src="/{{ $shoes->image }}" alt="" style="width: 200px;">
            <form method="POST" action="/">
                @csrf
                <div class="card-body">
                    <h4 class="card-text">{{ $shoes->name }}</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Detail</td>
                                <td>{{ $shoes->detail }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>IDR {{ $shoes->price }}</td>
                            </tr>
                            @if(Auth::check())
                                @if(auth()->user()->role_id === 2)
                                    <tr>
                                        <td>Qty</td>
                                        <td><div class="mb-3 position-relative">
                                                <input type="number" name="qty" id="qty" required min="1">
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endif
                        </tbody>
                    </table>
                    @if(Auth::check())
                        @if(auth()->user()->role_id === 2)
                            <div class="detail">
                                <input type="hidden" name="shoesID" value="{{ $shoes->shoes_id }}">
                                <input type="hidden" name="price" value="{{ $shoes->price }}">
                                <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                                <button type="submit" class="btn">Purchase</button>
                            </div>
                        @endif
                    @endif
                </div>
            </form>
        </div>
    </div>

@endsection