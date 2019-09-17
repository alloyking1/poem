@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="row">
                        @foreach ($activeOrders as $orders)
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="/admin/order/single/{{ $orders->id }}">
                                        <p>{{ $orders->name }}</p>
                                        <p>{{ $orders->order_code }}</p>
                                        <p>{{ $orders->description }}</p>
                                        {{--  <p>{{ $orders->payment_status }}</p>
                                        {{--  <p>{{ $orders->file }}</p>  --}}
                                        {{--  <p>{{ $orders->order_status }}</p>  --}}  --}}
                                        <p>Description</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
