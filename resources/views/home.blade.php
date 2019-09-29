@extends('layouts.app')

@section('content')

<section class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-12">
            
            <!-- Form -->
            <form class="rounded shadow">
                <div class="input-group input-group-lg">

                <!-- Prepend -->
                <div class="input-group-prepend">
                    <span class="input-group-text border-0 pr-1">
                    <i class="fe fe-search"></i>
                    </span>
                </div>

                <!-- Input -->
                <input type="text" class="form-control border-0 px-1" placeholder="Search... ">

                <!-- Append -->
                <div class="input-group-append">
                    <span class="input-group-text border-0 py-0 pl-1 pr-3">

                    <!-- Text -->
                    <span class="h6 text-uppercase text-muted d-none d-md-block mb-0 mr-5">
                        123 results
                    </span>

                    <!-- Button -->
                    <button type="submit" class="btn btn-sm btn-primary">
                        Search
                    </button>

                    </span>
                </div>

                </div>
            </form>

            </div>
        </div> <!-- / .row -->

        <br><br><br>
        <div class="row">
            <div class="card card-row shadow-light-lg mb-6">
                <div class="" style="padding:5%;">
                    <div class="col-md-12">
                        <div class="align-items-center">
                            <h1 class="display-4 text-gray">
                                Whats on your mind.
                            </h1>
                            <p class="font-size-lg text-muted mb-6 mb-md-8">
                                Stop wasting time trying to do it the "right way" and build a site from scratch. Landkit is faster, easier, and you still have complete control.
                            </p>
                        </div>
                        <form method="POST" action="user/poem/upload" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter topic" id="title" name="title" class="form-control">

                                    @error('topic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                
                                    <select class=" form-control" placeholder="cathegory" name="cathegory" id="cathegory" value="{{ old('cathegory') }}">
                                        <option value="">select</option>
                                        @foreach ($cathegory as $each)
                                            <option value="{{$each->id}}">{{$each->name}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <textarea placeholder="Enter Poem" id="content" name="content" class="form-control"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                <!-- <div class="card rounded-lg shadow-lg mb-6 mb-md-0 aos-init aos-animate d-flex"> -->
                <div class="card mb-6 shadow-light-lg lift lift-lg">

                    <!-- Body -->
                    <a href="/product/{{ $each->id }}" target="_blank" style="text-decoration:none">
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


@endsection


