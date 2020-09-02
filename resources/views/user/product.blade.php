@extends('layouts.app')

@section('content')

<div class="wrapper mt-2">
    <div class="section features-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center p-5">
                    <span class="badge badge-primary badge-pill mb-3">Insight</span>
                    <h3 class="display-3">{{$cathegory->name}}</h3>
                    <p class="lead">{{$cathegory->description}}</p>
                </div>
            </div>
            <div class="row p-4">
                
                @foreach ($content as $each)
                <div class="col-md-4">

                    <!-- Card -->
                    <div class="card mb-6 shadow shadow-light-lg lift lift-lg">

                        <!-- Image -->
                        <a class="card-img-top p-2" href="/product/single/{{$each->id}}">

                            <!-- Image -->
                            <img src="../../css/custom_assets/img/illustration-2.png" alt="..." class="card-img-top avatar-img rounded-circle">

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
                        <a href="/product/single/{{$each->id}}" target="_blank" style="text-decoration:none" class="p-5">
                            <div class="card-body py-6 py-md-8">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-xl-9">
                                
                                        <!-- Badge -->
                                        <div class="text-center mb-5 row">
                                            <div class="col-12 badge badge-pill badge-primary-soft">
                                                <p class="col-12 h6 font-weight-bold text-uppercase">
                                                    {{$each->title}}
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Text -->
                                        <p class="text-center text-muted mb-6 mb-md-8">
                                            <!-- {{ $each->content }} -->
                                            {{ str_limit($each->content, $limit = 100) }}
                                            <br><br>
                                            read more..
                                        </p>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </a>

                        <!-- Meta -->
                        <a class="card-meta mt-auto text-center p-3" href="#!">

                            <!-- Divider -->
                            <hr class="card-meta-divider">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm mr-2">
                                <img src="{{ asset('storage/storage/profile_pix/') }}" alt="..." class="avatar-img rounded-circle">
                            </div>

                            <!-- Author -->
                            <h6 class="text-uppercase text-muted mr-2 mb-0">
                                
                            </h6>

                            <!-- Date -->
                            <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                                <time datetime="2019-05-02">{{(date($each->created_at))}}</time>
                            </p>

                        </a>

                    </div>
                    <br>
                </div>
            
            @endforeach

            </div>
        </div>
    </div>
</div>


@endsection
