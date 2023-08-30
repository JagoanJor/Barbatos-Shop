@extends('navbar')

@section('title','History Transaction')

@section('content')
    <div class="container d-flex justify-content-center mb-2">
        <div class="">
            <?php foreach ($transactions as $transaction) : ?> 
                @php
                    $countQty = 0;
                    $countTotal = 0;
                @endphp
                @if(auth()->user()->id === $transaction->user_id)
                    <div class="card mt-5">
                        <div class="card-header text-primary" style="background-color: #D6EAF8;">
                            Transaction Date: {{ $transaction->created_at }}
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Sub Price</th>
                                    </tr>
                                </thead>
                                <?php foreach ($details as $detail) : ?> 
                                    <?php if ($transaction->id == $detail->transaction_id) : ?>
                                        <tbody>
                                            <tr>
                                                <td>{{ $detail->name }}</td>
                                                <td>{{ $detail->qty }}</td>
                                                <td>IDR {{ $detail->subPrice }}</td>
                                            </tr>
                                        </tbody>
                                        <?php $countQty += $detail->qty ?>
                                        <?php $countTotal += $detail->subPrice ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <thead>
                                    <tr>
                                        <th scope="col">Total</th>
                                        <th scope="col">{{ $countQty }} item(s)</th>
                                        <th scope="col">IDR {{ $countTotal }}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                @endif
            <?php endforeach; ?>
        </div>
    </div>
@endsection