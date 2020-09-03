<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'mywriterfamily') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('assets/css/argon.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/particles/css.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>
<body>
    <div id="app" class="mb-3">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown" onclick="mycategory()">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                <i class="ni ni-collection d-lg-none"></i>
                                <span class="nav-link-inner--text">Categories</span>
                            </a>
                            <div class="dropdown-menu p-3" id="categoryDiv">
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="/privacy/policy">Privacy Policy</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                            <span class="nav-link-inner--text d-lg-none">Instagram</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                            <i class="fa fa-twitter-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                            </a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <hr> 
                                    <a class="dropdown-item" href="/home">DashBoard</a>
                                    <hr> 
                                    <a class="dropdown-item" href="/user/profile">Profile</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

<script src="{{ mix('js/app.js') }}"></script>
<script>
    /*
    * make api call to fetch categories
    * @param post ID
    * @return response
    */
    function mycategory(){
        fetch('/api/user/category', {headers:new Headers({'Accept':'text/plain','X-Your-Custom-Header':'example value'})})
        .then(response =>{
            return response.json();
        })
        .then(json =>{
            var category = json;
            
            for(var i = 0, length = category.length; i < length; i++){ 
                var a = document.createElement('a'); 
                var spaceLine = document.createElement('hr');   
                var link = document.createTextNode(category[i].name); 

                a.appendChild(link);  
                // a.title = category[i].name; 
                a.href = "/product/"+category[i].id;
                document.getElementById('categoryDiv').appendChild(a); 
                document.getElementById('categoryDiv').appendChild(spaceLine); 
            }
        })
    }
</script>
</html>
