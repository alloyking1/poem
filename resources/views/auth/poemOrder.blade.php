@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="card">
                    <div class="card-header">Upload a peom</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="col-md-12">
                                <div class="card">
                                    {{$order->name}}<br>
                                    {{$order->order_code}}<br>
                                    {{$order->description}}<br>
                                    {{$order->amount}}<br>
                                    {{$order->payment_status}}<br>
                                    {{$order->order_status}}<br>
                                    {{$orderOwner->name}}<br>
                                </div>
                                <br>
                                <a href="/admin/order/decline/{{$order->id}}" class="btn btn-primary">Decline</a>
                                <a href="/admin/order/accept/{}" class="btn btn-primary">Accept</a>
                                <a href="/admin/order/complete/{}" class="btn btn-primary">Completed</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
