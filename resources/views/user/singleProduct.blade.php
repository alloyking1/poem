@extends('layouts.app')

@section('content')

<div class="wrapper container-pad" onload="">
    

    <section class="section-profile-cover section-shaped my-0">
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
    
    </section>
    <div class="container">
        <div class="card card-profile shadow mb-5 mt--300">
            <div class="px-4">

                <div class="col-lg-4 order-lg-1">
                   
                </div>

                <div class="text-center mt-5">
                <h3>{{$singlePoem->title}}</h3>
                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{$PoemWriter->name}} </div>
                    <div class="h6 font-weight-300">
                        <i class="ni location_pin mr-2"></i>
                        Created at: {{$singlePoem->created_at}}
                    </div>
                    <div>
                    <!-- <button id="like" onclick="myLike({{$singlePoem->id}})" class="btn btn-primary btn-neutral">like</button> -->
                    <button id="like" onclick="myLike({{$singlePoem->id}})" class="btn btn-sm btn-info mr-4">like</button>
                        <span class="heading" id="likes">{{$singlePoem->like}}</span>
                        <span class="description">Likes</span>
                    </div>
                </div>
                <div class="mt-5 py-5 border-top text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <p>
                        {{$singlePoem->content}}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                        <div class="">
                            <!-- <button id="like" onclick="myLike({{$singlePoem->id}})" class="btn btn-primary btn-neutral">like</button> -->
                            <!-- <button type="button" onclick="fetchComment({{$singlePoem->id}})" class="btn btn-default">comment</button> -->
                        </div>
                    </div>
                </div>
                </div>


                <!-- comment -->
                <div class="col-md-12 pb-5" id="commentDiv">
                    <!-- <div class="card card-row shadow shadow-light-lg mb-6 px-4"> -->
                    <div class="">
                        <div class="col-md-12 p-5">
                            <div class="align-items-center">
                                <h1 class="display-4 text-gray">
                                    Whats on your mind.
                                </h1>
                                <p class="font-size-lg text-muted mb-6 mb-md-8">
                                    Stop wasting time trying to do it the "right way" and build a site from scratch. Landkit is faster, easier, and you still have complete control.
                                </p>
                            </div>
                            <form method="POST" action="/user/poem/comment/{{$singlePoem->id}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <textarea placeholder="Enter comment " id="comment" name="comment" class="form-control"></textarea>
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

                                <div class="form-group">
                                    @if(Session::has('message'))
                                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                                    @endif
                                </div>
                            </form>
                            <hr>
                            <div class="mb-3"> 
                                <h3 class="display-4">Comments</h3>
                                <div id="postComments">
                                    @foreach($singlePoem->poem_comment as $eachComment)
                                        <div class="card p-5">
                                            {{$eachComment->comment}}
                                            <br>
                                            {{$eachComment->created_at}}
                                            <!-- {{$eachComment->user_id}} -->
                                        </div>
                                        <br>
                                    @endforeach
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection