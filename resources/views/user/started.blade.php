@extends('home.homepage')

@section('content')
<body style="background: url(/wide.jpg);">
    <center>
<div class="col-md-10" style="margin-top: 300px; display: inline-flex; ">
    @auth
        <div class="card border-primary">  
            <div class="card-body"> 
                <h5 class="card-title">Special title treatment</h5> 
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> 
                <a href="#" class="btn btn-primary">Go somewhere</a> 
            </div> 
        </div>
        <div class="card border-primary" style="margin-left: 40px;">  
            <div class="card-body"> 
                <h5 class="card-title">Special title treatment</h5> 
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> 
                <a href="#" class="btn btn-primary">Go somewhere</a> 
            </div> 
        </div>
        <div class="card border-primary" style="margin-left: 40px;">  
            <div class="card-body"> 
                <h5 class="card-title">Special title treatment</h5> 
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> 
                <a href="#" class="btn btn-primary">Go somewhere</a> 
            </div> 
        </div>
    @else
        <p>Please log in to access this page.</p>
    @endauth
</div>
</center>
</body>
@endsection
