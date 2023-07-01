@extends('home.homepage')

@section('content')
<body style="background: url(/case.jpg);">
<div class="container" >
 <div class="row">
<center>
    <div style="margin-top: 280px;">
    <h5 style="color: white; font-size: 30px;">Welcome dear customers, use the links below for their desired purposes</h5><br>
    </div>
</center>
<center>
<div class="col-md-10" style="margin-top: 20px; display: inline-flex; ">
    
        <div class="card border-primary" style="border-radius: 15px;">  
            <div class="card-body"> 
                <h5 class="card-title" style="margin-left: -40px;">Hello!!</h5> 
                <p class="card-text"> To create a new user clicke the button below</p><br>
                <a href="{{ url('/user/create') }}" class="btn btn-primary">Add new Request</a>
            </div> 
        </div>
        <div class="card border-primary" style="margin-left: 40px; border-radius: 15px;">  
            <div class="card-body" >  
                <br><p class="card-text">To view past Request made, click on the link below</p> <br>
                <a href="{{ url('/user/index') }}" class="btn btn-primary">View past Request</a> 
            </div> 
        </div>
        <div class="card border-primary" style="margin-left: 40px; border-radius: 15px;">  
            <div class="card-body"> 
                <br><p class="card-text">Use the link below to contact us</p><br>
                <a href="{{ url('/admin/contactus') }}" class="btn btn-primary">Contact Us</a> 
            </div> 
        </div>
    
</div>
</center>
</body>
@endsection
