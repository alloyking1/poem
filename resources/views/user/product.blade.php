@extends('layouts.app')

@section('content')

<section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax bg-dark" style="margin-top:-2%!important;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7 text-center">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-white">
                {{$cathegory->name}}
            </h1>

            <!-- Text -->
            <p class="lead mb-0 text-white-75">
                Keep up to date with what we're working on! Landkit is an ever evolving theme with regular updates. 
            </p>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<br><br><br><br>




<section>
    <div class="container">
        <div class="row align-items-center">
            @foreach ($content as $each)
                <div class="col-md-4">

                    <!-- Card -->
                    <div class="card mb-6 shadow-light-lg lift lift-lg">

                        <!-- Image -->
                        <a class="card-img-top" href="/product/single/{{$each->id}}">

                            <!-- Image -->
                            <img src="../../css/custom_assets/img/illustration-2.png" alt="..." class="card-img-top">

                            <!-- Shape -->
                            <div class="position-relative">
                                <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                                <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor"></path>
                                </svg>
                                </div>
                            </div>

                        </a>

                        <!-- Body -->
                        <a href="/product/single/{{$each->id}}" target="_blank" style="text-decoration:none">
                            <div class="card-body py-6 py-md-8">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-xl-9">
                                
                                        <!-- Badge -->
                                        <div class="text-center mb-5">
                                            <span class="badge badge-pill badge-primary-soft">
                                            <span class="h6 font-weight-bold text-uppercase">{{ $each->title }}</span>
                                            </span>
                                        </div>

                                        <!-- Text -->
                                        <p class="text-center text-muted mb-6 mb-md-8">
                                            {{ $each->content }}
                                        </p>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </a>

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
                </div>
            
            @endforeach
        </div>
    </div>
</section>

@endsection
