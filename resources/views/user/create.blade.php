<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <link rel="stylesheet" type="text/css" href="/form.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  
  <title></title>
</head>
<body class="cr-body">
@extends('home.homelayout')
@section('content')
<div class="container" >
  <div class="row">
  <div class="col-md-15" style="margin-top: 80px;">
 
<div class="card" >
  <div class="card-header">User Page</div>
  <div class="card-body">
      <section>
        <div class="container">
      <form action="{{ url('user') }}" method="post">
        {!! csrf_field() !!}
        <div class="formBox">
        <div class="input-box w100">
          <input type="text" name="username" required>
          <label>Full Name</label>
        </div>
         
          <div class="input-box w100">
            <input type="number" name="phoneNumber" required >
            <label>Phone Number</label>
          </div>

          <div class="input-box w100">
            <textarea  required name="description"></textarea> 
            <label>Service Description...</label>
          </div>

          <div class="input-box w100">
            <input type="number" name="quantity" required>
            <label>Quantity</label>
          </div>

          <div class="input-box w100" style="">
            <input type="number" name="price" required >
            <label>Price</label>
          </div>

          <div  class="input-box w100">
            <input type="text" id="datepicker" name="date" required>
            <label >Date:</label>
          </div>

          <div class="input-box w100">
            <input type="text" name="email" required>
            <label>Email Address</label>
          </div><br>

          <div >
            <label class="form-check-label" for="defaultCheck1">Bon de Commande</label><br>
            <input type="checkbox" class="form-check-input" name="bdc" required> I agre
          </div>
      </div>
      <br><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
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
</script>

 
@stop
</body>
</html>