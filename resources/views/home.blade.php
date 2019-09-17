@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach ($cathegory as $each)
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="/product/{{ $each->id }}">
                                        <p>{{ $each->name }}</p>
                                        <p>Description</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <br>
            <section>
                <div class="card-header">
                    <p>Your active orders</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($userOrders as $order)
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="#">
                                        <h3>{{$order->name}}</h3>
                                        <p>{{$order->description}}</p>
                                        <p>{{$order->order_code}}</p>
                                        <p>{{$order->amount}}</p>
                                        <p>{{$order->payment_status}}</p>
                                        <p>{{$order->order_status}}</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
