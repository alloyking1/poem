@extends('layouts.app')

@section('content')

<div class="">
  <div class="wrapper">
      <div class="section section-hero section-shaped">
        <div class="shape shape-style-3 shape-default">
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
        <div class="page-header">
          <div class="container shape-container d-flex align-items-center py-lg">
            <div class="col px-0">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1 class="text-white display-1">{{ config('app.name', 'Writers family') }}</h1>
                  <h2 class="display-4 font-weight-normal text-white">A meeting point for writers</h2>
                  <div class="btn-wrapper mt-4">
                    <!-- <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                      <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                      <span class="btn-inner--text">Play more</span>
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>
      <div class="section features-6">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="info info-horizontal info-hover-primary">
                <div class="description pl-4">
                  <h5 class="title">For Developers</h5>
                  <p>The time is now for it to be okay to be great. People in this world shun people for being great. For being a bright color. For standing out. But the time is now.</p>
                  <a href="#" class="text-info">Learn more</a>
                </div>
              </div>
              <div class="info info-horizontal info-hover-primary mt-5">
                <div class="description pl-4">
                  <h5 class="title">For Designers</h5>
                  <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                  <a href="#" class="text-info">Learn more</a>
                </div>
              </div>
              <div class="info info-horizontal info-hover-primary mt-5">
                <div class="description pl-4">
                  <h5 class="title">For Beginners</h5>
                  <p>That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you can’t learn anything from a compliment. If everything I did failed - which it doesn't.</p>
                  <a href="#" class="text-info">Learn more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-10 mx-md-auto">
              <img class="ml-lg-5" src="https://demos.creative-tim.com/argon-design-system/assets/img/ill/ill.png" width="100%">
            </div>
          </div>
        </div>
      </div>
      <div class="section features-1">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <span class="badge badge-primary badge-pill mb-3">Insight</span>
              <h3 class="display-3">Chategories</h3>
              <p class="lead">The time is now for it to be okay to be great. For being a bright color. For standing out.</p>
            </div>
          </div>
          <div class="row">
            <!--   -->
           

            @foreach ($cathegory as $each)
            <div class="col-md-4">

                <!-- Card -->
                <!-- <div class="card rounded-lg shadow-lg mb-6 mb-md-0 aos-init aos-animate d-flex"> -->
                <div class="card mb-6 shadow shadow-light-lg lift lift-lg">

                    <!-- Body -->
                    <a href="/product/{{ $each->id }}" style="text-decoration:none">
                        <div class="card-body py-6 py-md-8">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-9">
                            
                                    <!-- Badge -->
                                    <div class="text-center mb-5">
                                        <span class="badge badge-pill badge-primary-soft">
                                        <span class="h6 font-weight-bold text-uppercase">{{ $each->name }}</span>
                                        </span>
                                    </div>

                                    <!-- Text -->
                                    <p class="text-center text-muted mb-6 mb-md-8">
                                    
                                        {{ str_limit($each->description, $limit= 100) }}
                                        <br>See posts<i class="ni ni-bold-right text-primary"></i>
                                    </p>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </a>

                </div>
                <br>
            </div>
            
            @endforeach
          </div>
        </div>
      </div>
  </div>
</div>

@endsection