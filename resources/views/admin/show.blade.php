@extends('home.homelayout')
@section('content')
 
<div class="container" >
        <div class="row">
 
            <div  style="margin-top: 110px;">
<div class="card" style="width: 100%; ">
  <div class="card-header" >User Page</div>
<div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" style="width: 100%;">
                                
                                    <tr>
                                        
                                        <th>Fisrt Name</th>
                                        <td><h6 class="card-title"> {{ $admin->firstName }}</h6></td>

                                    </tr>

                                    <tr>
                                        <th>Last Name</th>
                                        <td><h6 class="card-text">{{ $admin->lastName }}</h6></td>
                                    </tr>

                                    <tr>
                                        <th>Email</th>
                                        <td><h6 class="card-text">{{ $admin->email }}</h6></td>
                                    </tr>

                                    <tr>
                                        <th>Phone Number</th>
                                        <td><h6 class="card-text">{{ $admin->phoneNumber }}</h6></td>
                                    </tr>

                                    <tr>
                                        <th>Message</th>
                                         <td><h6 class="card-text">{{ $admin->message }}</h6></td>
                                    </tr>

                                    <tr>
                                        <th>Actions</th>

                                    </tr>
                                
</table>
</div>
</div>
</div>
</div>
</div>
@stop