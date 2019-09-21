@extends('layouts.app')

@section('content')

<!-- WELCOME
================================================== -->
<section class=" margin-b top-section">
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
                <a href="#" class="btn btn-primary shadow lift mr-1">
                    Register <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
                </a>
                <a href="#" class="btn btn-primary-soft lift">
                    Login
                </a>
                </div>

            </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </div>
</section>

<section class=" mb-4 ">
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
                <div class="card rounded-lg shadow-lg mb-6 mb-md-0 aos-init aos-animate" style="z-index: 1;" data-aos="fade-up">

                    <!-- Body -->
                    <div class="card-body py-6 py-md-8">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-9">
                    
                            <!-- Badge -->
                            <div class="text-center mb-5">
                                <span class="badge badge-pill badge-primary-soft">
                                <span class="h6 font-weight-bold text-uppercase">{{ $each->name }}</span>
                                </span>
                            </div>

                            <!-- Price -->
                            <!-- <div class="d-flex justify-content-center">
                                <span class="h2 mb-0 mt-2">$</span>
                                <span class="price display-2 mb-0" data-annual="29" data-monthly="49">29</span>
                                <span class="h2 align-self-end mb-1">/mo</span>
                            </div> -->

                            <!-- Text -->
                            <p class="text-center text-muted mb-6 mb-md-8">
                                Landkit is built to make your life easier. 
                                Variables, build tooling, documentation, and reusable components.
                            </p>
                        
                        </div>
                    </div> <!-- / .row -->
                    </div>

                    <!-- Button -->
                    <a href="/product/{{ $each->id }}" class="card-btn btn btn-block btn-lg btn-primary rounded-bottom">
                        Continue
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

</section>

<!-- FAQ
    ================================================== -->
    <section class="pt-15 bg-dark">
      <div class="container pt-8 pt-md-11">
        <div class="row">
          <div class="col-12 col-md-6">
            
            <!-- Item -->
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-lg badge-rounded-circle badge-success">
                <span>?</span>
              </div>

              <div class="ml-5">

                <!-- Heading -->
                <h4 class="text-white">
                  Can I use Landkit for my clients?
                </h4>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-8">
                  Absolutely. The Bootstrap Themes license allows you to build a websites for personal use or for a client. 
                </p>

              </div>

            </div>
            
            <!-- Item -->
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-lg badge-rounded-circle badge-success">
                <span>?</span>
              </div>

              <div class="ml-5">

                <!-- Heading -->
                <h4 class="text-white">
                  Do I get free updates?
                </h4>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-0">
                  Yes. We update all of our themes with each Bootstrap update, plus are constantly adding new components, pages, and features to our themes. 
                </p>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-6">
            
            <!-- Item -->
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-lg badge-rounded-circle badge-success">
                <span>?</span>
              </div>

              <div class="ml-5">

                <!-- Heading -->
                <h4 class="text-white">
                  Is there a money back guarantee?
                </h4>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-8">
                  Yup! Bootstrap Themes come with a satisfaction guarantee. Submit a return and get your money back.
                </p>

              </div>

            </div>
            
            <!-- Item -->
            <div class="d-flex">

              <!-- Badge -->
              <div class="badge badge-lg badge-rounded-circle badge-success">
                <span>?</span>
              </div>

              <div class="ml-5">

                <!-- Heading -->
                <h4 class="text-white">
                  Does it work with Rails? React? Laravel?
                </h4>

                <!-- Text -->
                <p class="text-muted mb-6 mb-md-0">
                  Yes. Landkit has basic CSS/JS files you can include. If you want to enable deeper customization, you can integrate it into your assets pipeline or build processes.
                </p>

              </div>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>



@endsection
