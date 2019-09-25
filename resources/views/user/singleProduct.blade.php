@extends('layouts.app')

@section('content')
<!-- <div class="container">
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
                        <p>Place your order Now</p>
                        <hr>

                        <form method="POST" action="/order/gig/{{$id}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('topic') is-invalid @enderror"  id="file_name" name="file_name">

                                    @error('topic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <textarea placeholder="Enter description" id="text" name="text"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>

                                    <button type="button" onClick="payWithRave()">Pay Now</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="card card-row shadow-light-lg mb-6">
        <div class="" style="padding:5%;">
            <div class="align-items-center">
                <h1 class="display-4 text-gray">
                    {{$singlePoem->title}}
                </h1>
                <p class="font-size-lg text-muted mb-6 mb-md-8">
                    {{$singlePoem->content}}
                </p>
                <!-- Meta -->
                <a class="card-meta mt-auto" href="#!">

                    <!-- Divider -->
                    <hr class="card-meta-divider">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm mr-2">
                        <img src="assets/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>

                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mr-2 mb-0">
                        Ab Hadley
                    </h6>

                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                        <time datetime="2019-05-02">May 02</time>
                    </p>

                </a>
            </div>
            <!-- {{$singlePoem}} -->
        </div>
    </div>
</div>
@endsection
