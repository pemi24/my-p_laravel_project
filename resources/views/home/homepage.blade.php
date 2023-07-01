@extends('home.homelayout')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/home.css">
    <title></title>
    <style>
        
    </style>

</head>
<body class="hb-body" style="background: url(/bgr.jpg); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            @if (Route::has('login'))
                @auth
                    <center>
                        @if(Auth::user()->usertype == 'user')
                            <div style="margin-top: 280px;">
                                <h5 style="color: white; font-size: 30px;">Welcome dear User to the Home Page</h5><br>
                                <a href="{{ url('/user/layout') }}">
                                    <button class="btn btn-primary btn-lg" style="margin-left: 5px;">
                                        Get Started
                                    </button>
                                </a>
                            </div>
                        @elseif(Auth::user()->usertype == 'admin')
                            <div style="margin-top: 280px;">
                                <h5 style="color: white; font-size: 30px;">Welcome dear Admin to the Home Page</h5><br>
                                <a href="{{ url('/admin/layout') }}">
                                    <button class="btn btn-primary btn-lg" style="margin-left: 5px;">
                                        Get Started
                                    </button>
                                </a>
                            </div>
                        @endif
                    </center>
                @else
                    <center>
                        <div style="margin-top: 280px;">
                            <h5 style="color: white; font-size: 30px;">Welcome to the home page, please login in order to get started</h5><br>
                        </div>
                        <a href="{{ url(route ('login')) }}">
                                    <button class="btn btn-primary btn-lg" style="margin-left: 5px;">
                                        Get Started
                                    </button>
                                </a>
                    </center>
                @endauth
            @endif
        </div>
    </div>
</body>
</html>
@endsection
