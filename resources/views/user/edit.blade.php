<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <link rel="stylesheet" type="text/css" href="/form.css">
  <title></title>
  <style>
    .e-body{
      background: url(/pexels.jpg);
      background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
  </style>
</head>
<body class="e-body">
@extends('home.homelayout')
@section('content')
  @if (Route::has('login'))
  @auth

<div class="container" >
  <div class="row">
  <div class="col-md-15" style="margin-top: 80px;">
<div class="card" style="margin-top: 30px;">
  <div class="card-header">User Page</div>
  <div class="card-body">
      <section>
        <div class="container">
      <form action="{{  url('user/' .$user->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />
        <div class="formBox">
        <div class="input-box w100">
          <input type="text" name="username" id="username" value="{{$user->username}}" required>
          <label>Full Name</label>
        </div>

        <div class="input-box w100">
          <input type="text" name="address" id="address" value="{{$user->address}}" required>
          <label>Address</label>
        </div>

         
          <div class="input-box w100">
            <input type="number" name="phoneNumber" id="PhoneNumber" value="{{$user->phoneNumber}}" required >
            <label>Phone Number</label>
          </div>

          <div class="input-box w100">
            <textarea  required name="description" id="description" >{{$user->description}}</textarea> 
            <label>Service Description...</label>
          </div>

          <div class="input-box w100" style="">
            <input type="number" name="price" id="price" value="{{$user->price}}" required >
            <label>Price</label>
          </div>

          <div  class="input-box w100">
            <input type="text" id="datepicker" name="date" value="{{$user->date}}" required>

            <label for="datepicker" class="{{ $user->date ? 'has-value' : '' }}">Date:</label>
          </div>

          <div class="input-box w100">
            <input type="text" name="email" id="email" value="{{$user->email}}" required>
            <label>Email Address</label>
          </div><br>

          <div >
            <label class="form-check-label" for="defaultCheck1">Bon de Commande</label><br>
            <input type="checkbox" class="form-check-input" name="bdc" id="bdc" value="{{$user->bdc}}" required> I agre
          </div>
      </div>
      <br><br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    </div>
    </section>
   
  </div>
</div>
</div>
</div>
</div>
<script>
  flatpickr("#datepicker", {
    dateFormat: "Y-m-d",
    onChange: function(selectedDates, dateStr, instance) {
      if (dateStr) {
        document.getElementById('datepicker').classList.add('has-value');
      } else {
        document.getElementById('datepicker').classList.remove('has-value');
      }
    }
  });

  // Add event listener to the datepicker input field
  const datepicker = document.getElementById('datepicker');
  datepicker.addEventListener('focus', function() {
    this.classList.add('has-value');
  });

  // Add event listeners to all input fields
  const inputFields = document.querySelectorAll('.input-box input, .input-box textarea');
  inputFields.forEach(function(input) {
    input.addEventListener('blur', function() {
      if (this.value !== '') {
        this.classList.add('has-value');
      } else {
        this.classList.remove('has-value');
      }
    });
  });

  // Trigger blur event on page load to check if input fields have values
  window.addEventListener('load', function() {
    inputFields.forEach(function(input) {
      if (input.value !== '') {
        input.classList.add('has-value');
      }
    });
  });
</script>

@endauth
@endif 
@stop
</body>
</html>