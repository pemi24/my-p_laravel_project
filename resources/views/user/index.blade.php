@extends('home.homelayout')
@section('content')
<body style="background: url(/pexels.jpg);">
    <div class="container" >
        <div class="row">
 
            <div class="col-md-15" style="margin-top: 160px;">
                <div class="card">
                    <div class="card-header">
                        <h2>User Info</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Email</th>
                                        <th>Bon De Commande</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->phoneNumber }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->bdc }}</td>
 
                                        <td style="display: inline-flex;">
                                            <a href="{{ url('/user/' . $item->id) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true" ></i> View</button></a>

                                            @if(Auth::user()->usertype == 'admin') <!-- Add this condition -->
                                            <a href="{{ url('/user/' . $item->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"  style="margin-left: 5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"  style="margin-left: 5px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection