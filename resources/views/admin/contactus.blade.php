<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>user page</title>
   <link rel="stylesheet" href="navbar.css">
   <link rel="stylesheet" href="/user.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Include SweetAlert library -->
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



   
  </head>
  <body>
  @extends('home.homelayout')
  @section('content')
  <div >
  <div class="row">
  <div class="col-md-15" style="margin-top: 0px;">
 
<div class="ard" >
    <section>
    <div class="container">    
      <div class="contactInfo">
      	<div>
      		<h2>Contact Info</h2>
      		<ul class="info">
      		  <li>
      			<span><img src="/location.png"></span>
      			<span>Logbaba</span>
      		  </li>
      		  <li>
      			<span><img src="/mail.png"></span>
      			<span>miclanjunior@gmail.com</span>
      		  </li>
      		  <li>
      			<span><img src="/call.png"></span>
      			<span>+237676772832</span>
      		  </li>
      		</ul>
      	</div>
      	<ul class="sci">
      		<li><a href="#"><img src="/1.png"></a></li>
      		<li><a href="#"><img src="/2.png"></a></li>
      		<li><a href="#"><img src="/3.png"></a></li>
      		<li><a href="#"><img src="/5.png"></a></li>
      	</ul>
      </div>
      <div class="contactForm">
                   <div class="chat-header" style="font-size: 20px;">
                 <i class="fa fa-user-circle" aria-hidden="true"></i>
                {{$user->name}}
            </div><br><br>
      	<h2>Send a Message</h2>
        <form action="{{ url('admin') }}" method="post" onsubmit ="showMessage()">

        {!! csrf_field() !!}
        @if(isset($user)) 
      	<div class="formBox">
      		<div class="inputBox w50">
      			<input type="hidden" name="fullName" value="{{$user->name}}" required>
      			<span class="form-label hidden">Full Name</span>
      		</div>
      		<div class="inputBox w50">
      			<input type="hidden" name="email" value="{{$user->email}}" required>
      			<span class="form-label hidden">Email Address</span>
      		</div>
      		<div class="inputBox w50">
      			<input type="hidden" name="phoneNumber" value="{{$users->phoneNumber}}" required>
      			<span class="form-label hidden">Mobile Number</span>
      		</div>
          @endif

           
      	</div>
        <br><br> <div class="chat-body" style="display: flex; flex-direction: column; font-weight: bold;">
                <div class="chat-message received" style="
    margin-bottom: 10px;">
                    <div class="message-text">Hello! How can I help you?</div>
                </div>
                <!-- Add more chat messages here -->
            
            <div class="inputBox w50" style="width:100%;">
                <textarea placeholder="Type a message..." name="message"></textarea>
                <button onclick="sendMessage()"><i class="fas fa-paper-plane"></i></button>
            </div>
            </div>
      </form>
      </div>
    </div>
    </section>
  </div>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function showMessage() {
    Swal.fire({
      icon: 'success',
      title: 'Success',
      text: 'Your message has been updated successfully',
      showConfirmButton: true,
      timer: 10000, // Set the duration in milliseconds (5 seconds)
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading();
      },
      willClose: () => {
        // Code to execute when the alert is closed
        // This can be left empty if no action is needed
      }
    });
  }
</script>




    @endsection
  </body>
</html>