@extends('layouts.app')

@section('content')
<div class="">


    <div class="wrapper">

        <!-- <section class="section-profile-cover section-shaped my-0">
            <div class="section section-hero section-shaped">
                <div class="shape shape-style-1 shape-default">
                <span class="span-150"></span>
                <span class="span-50"></span>
                <span class="span-50"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                </div>
                
                <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
                </div>


            </div>
        
        </section> -->
        <!-- <section class="section bg-secondary">
            <div class="container">
                <div class="card card-profile shadow mt--300">
                <div class="px-4">
                    
                    <div class="text-center mt-5 p-5">
                        <h3>{{auth::user()->name}}</span></h3>
                        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{auth::user()->email}}</div>
                        <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer</div>
                        <div><i class="ni education_hat mr-2"></i>University of Computer Science</div>
                        </div>
                        <div class="mt-5 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                <p>An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <sction>
            <div class="container p-3">
                <div class="col-12  text-center line-height margin-t p-5">
                
                    <!-- Heading -->
                    <h1>
                        Poems by {{auth()->user()->name}}
                        <hr>
                    </h1>
                </div>
                
                <div class="row align-items-center">

                    @foreach ($UserPoems as $each)
                        <div class="col-md-4">

                            <!-- Card -->
                            <div class="card mb-6 shadow-light-lg lift lift-lg mb-5">

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
                                                    read more >>>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                </a>

                            </div>
                        </div>
                    
                    @endforeach
                </div>
            </div>
        </section>
    </div>

</div>
@endsection
