@extends('layouts.app')

@section('content')

<div class="container pad-section">
    <div class="card card-row shadow-light-lg mb-6">
        <div class="" style="padding:10%;">
            <div class="align-items-center">
                <h1 class="display-4 text-gray">
                    {{$singlePoem->title}}
                    
                </h1>
                <p class="font-size-lg text-muted mb-6 mb-md-8">
                    {{$singlePoem->content}}
                </p>
                <!-- Meta -->
                <a class="card-meta mt-auto" href="/user/profile">

                    <!-- Divider -->
                    <hr class="card-meta-divider">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm mr-2">
                        <img src="{{ asset('storage/storage/profile_pix/'.$PoemWriter->profile_pix) }}" alt="..." class="avatar-img rounded-circle">
                    </div>

                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mr-2 mb-0">
                        {{$PoemWriter->name}}
                    </h6>

                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                        <time datetime="2019-05-02">{{$singlePoem->created_at}}</time>
                    </p>

                </a>

                <button id="LikeBtn">like</button>
            </div>
            <!-- {{$singlePoem}} --> 
        </div>


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
                                    <textarea placeholder="Enter comment " id="coment" name="coment" class="form-control"></textarea>
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
</div>
@endsection
