@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Share a poem</div>

                <div class="card-body">

                    <div class="row">
                   
                        <form method="POST" action="user/poem/upload" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter topic" id="title" name="title" class="form-control">

                                    @error('topic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                
                                <select class=" form-control" name="cathegory" id="cathegory" value="{{ old('cathegory') }}">
                                    <option value="1">select Cathegory</option>
                                    <option value="1">Love Poem</option>
                                    <option value="2">Tech Poem</option>
                                </select>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <textarea placeholder="Enter Poem" id="content" name="content" class="form-control"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
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
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Read Poems</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach ($cathegory as $each)
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="/product/{{ $each->id }}">
                                        <p>{{ $each->name }}</p>
                                        <p>Description</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


