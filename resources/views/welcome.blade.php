@extends('layouts.app')

@section('content')

<!-- WELCOME
================================================== -->
<section class="white-color pad-section">
    <div class="container">  
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">
                
                <!-- Image -->
                <img src="./css/custom_assets/img/illustration-2.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..." data-aos="fade-up" data-aos-delay="100">

            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">
                
                <!-- Heading -->
                <h1 class="display-3 text-center text-md-left">
                Welcome to <span class="text-primary">PoemWorld</span>. <br>
                Ocean of emotions.
                </h1>

                <!-- Text -->
                <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
                Build a beautiful, modern website with flexible Bootstrap components built from scratch.
                </p>
                    
                <!-- Buttons -->
                <div class="text-center text-md-left">
                <a href="/register" class="btn btn-primary shadow lift mr-1">
                    Register <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                </a>
                <a href="/login" class="btn btn-primary-soft lift">
                    Login
                </a>
                </div>

            </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </div>
</section>

<section class=" mb-4 gray-color pad-section">
    <div class="container">
        <div class="col-12  text-center line-height margin-t">
        
            <!-- Heading -->
            <h1>
            What would you be interested in today.
            </h1>
            
            <!-- Text -->
            <p class="lead text-gray-700">
                Every writer has a tone. The tone of your writing can be heard in your passion and field of focus. Bla bla bla
            </p>


        </div>
        <div class="row align-items-center">
            @foreach ($cathegory as $each)
            <div class="col-md-4">

                <!-- Card -->
                <div class="card mb-6 shadow-light-lg lift lift-lg">

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
                                        Landkit is built to make your life easier. 
                                        Variables, build tooling, documentation, and reusable components.
                                    </p>

                                    read more >>>
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

<section>
    <!-- SHAPE
    ================================================== -->
    <div class="position-relative mt-n15">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
      </div>
    </div>

    
    <!-- CTA
    ================================================== -->
    <section class="py-8 py-md-11 bg-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <br><br><br><br>
            <!-- Badge -->
            <span class="badge badge-pill badge-gray-700-soft mb-4">
              <span class="h6 font-weight-bold text-uppercase">want to write?</span>
            </span>
            <!-- Heading -->
            <h1 class="display-4 text-white">
              Join over 2000, other poets.
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-8">
              Stop wasting time trying to do it the "right way" and build a site from scratch. Landkit is faster, easier, and you still have complete control.
            </p>

            <!-- Button -->
            <a href="/register" target="_blank" class="btn btn-success lift">
              Register <i class="fe fe-arrow-right"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
      </div>
    </div>

</section>

<!-- FOOTER
    ================================================== -->
    <footer class="py-8 py-md-11 bg-gray-200">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 col-lg-3">
        
            <!-- Brand -->
            <img src="custom_assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-2">

            <!-- Text -->
            <p class="text-gray-700 mb-2">
              A better way to build.
            </p>

            <!-- Social -->
            <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
              <li class="list-inline-item list-social-item mr-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-decoration-none">
                  <img src="custom_assets/img/instagram.svg" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-decoration-none">
                  <img src="custom_assets/img/facebook.svg" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item mr-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-decoration-none">
                  <img src="custom_assets/img/twitter.svg" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item">
                <a href="https://landkit.goodthemes.co/#!" class="text-decoration-none">
                  <img src="custom_assets/img/pinterest.svg" class="list-social-icon" alt="...">
                </a>
              </li>
            </ul>

          </div>
          <div class="col-6 col-md-4 col-lg-2">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Products
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Page Builder
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  UI Kit
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Styleguide
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li>
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Changelog
                </a>
              </li>
            </ul>

          </div>
          <div class="col-6 col-md-4 col-lg-2">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Services
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Pagebuilder
                </a>
              </li>
              <li>
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  UI Kit
                </a>
              </li>
            </ul>

          </div>
          <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Connect
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-muted mb-0">
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Page Builder
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  UI Kit
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Styleguide
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li>
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Changelog
                </a>
              </li>
            </ul>

          </div>
          <div class="col-6 col-md-4 col-lg-2">
        
            <!-- Heading -->
            <h6 class="font-weight-bold text-uppercase text-gray-700">
              Legal
            </h6>

            <!-- List -->
            <ul class="list-unstyled text-muted mb-0">
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li>
                <a href="https://landkit.goodthemes.co/#!" class="text-reset">
                  Pagebuilder
                </a>
              </li>
            </ul>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </footer>


    
    

@endsection
