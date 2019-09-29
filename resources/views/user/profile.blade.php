@extends('layouts.app')

@section('content')
<div class="container">
    <!-- CONTENT
    ================================================== -->
    <section class="">
      <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center no-gutters min-vh-100">
          
          <div class="col-12 col-md-12 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">
            <div class="">
                <img class="img-fluid img-thumbnail" style="border-radius:100% !important;" src="{{ asset('storage/storage/profile_pix/'.auth::user()->profile_pix) }}" alt="">
            </div>
            <!-- Heading -->
            <h1 class="mb-0 font-weight-bold text-center">
              User Profile
            </h1>
            <!-- Text -->
            <!-- <p class="mb-6 text-center text-muted">
               Upload your profile picture to complete registration process. other details cannot be changed.
            </p>
            <br> -->
            <p class="mb-6 text-center text-muted">
                User Name: {{auth::user()->name}}<br>
                User Name: {{auth::user()->email}}<br>
            </p>

            <form class="mb-6" method="POST" enctype="multipart/form-data" action="/user/upload/profile_pix">
                @csrf
                <!-- Profile img -->
                <div class="form-group">
                    <label for="email">
                    Upload profile picture
                    </label>
                    <input id="profile_pix" placeholder="select and image" type="file" class="form-control @error('file') is-invalid @enderror" name="profile_pix" required autocomplete="email" autofocus>
                  <!-- 
                    @error('profile_pix')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $profile_pix }}</strong>
                        </span>
                    @enderror -->
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                    Upload
                </button>

            </form>


          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <section>
    <div class="container">
      <div class="col-12  text-center line-height margin-t">
      
          <!-- Heading -->
          <h1>
            Poems by {{auth()->user()->name}}
          </h1>
      </div>

      <div class="row align-items-center">
          @foreach ($UserPoems as $each)
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

                      <!-- Meta -->
                      <a class="card-meta mt-auto" href="#!">

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
              </div>
          
          @endforeach
      </div>
    </div>
</section>

</div>
@endsection
