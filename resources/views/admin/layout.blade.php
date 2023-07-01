@extends('home.homelayout')

@section('content')
<body style="background: url(/case.jpg);">
<div class="container" >
 <div class="row">
<center>
    <div style="margin-top: 220px;">
    <h5 style="color: white; font-size: 30px;">Welcome dear customers, use the links below for their desired purposes</h5><br>
    </div>
</center>
<center>
<div class="col-md-10" style="margin-top: 20px; display: inline-flex; ">
    
        <div class="card border-primary" style="border-radius: 15px;">  
            <div class="card-body">  
                <br><p class="card-text">Click the link below to View Messages</p><br>
                <a href="{{ url('/admin/') }}" class="btn btn-primary"><i class="fa fa-comment" aria-hidden="true" ></i>   Messages</a>
            </div> 
        </div>
        <div class="card border-primary" style="margin-left: 40px; border-radius: 15px;">  
            <div class="card-body" >  
                <br><p class="card-text">To view past Request made, click on the link below</p> <br>
                <a href="{{ url('/user/index') }}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true" ></i>  View past Request</a> 
            </div> 
        </div>
        <div class="card border-primary" style="margin-left: 40px; border-radius: 15px;">  
            <div class="card-body"> 
                <br><p class="card-text">Use the link below to contact us</p><br>
                <a href="{{ url('/admin/contactus') }}" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true" ></i>   Contact Us</a> 
            </div> 
        </div>
    
</div>
</center>
</body>
@endsection
