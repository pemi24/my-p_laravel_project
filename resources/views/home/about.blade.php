<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>About Page</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body class="a-body">
@extends('home.homepage')
@section('content')
    <div class="section">
      <div class="container">
        <div class="content-section">
          <div class="title">
            <h1>About Us</h1>
          </div>
          <div class="content">
            <h3>SNEF – OMNIUM SERVICE is an industrial automation company based out of Cameroon. The headquarter enterprise is based to Marseille France, 87 Avenue des Aygalades</h3>
            <p>
              Capable of intervening from start to finish, throughout the life cycle of your installations, we have built our Group around a wide range of technical skills. We are engineers/designers, integrators, maintainers and operators of multi-technical solutions in the fields of energy, mechanics and digital. We are constantly reinventing ourselves, promoters of the digital revolution, Connected Objects, Big Data, cybersecurity, Industry 4.0, Artificial Intelligence and Mixed Reality.
            </p>
            <div class="button">
              <a href="">Read More</a>
            </div>
          </div>
          <div class="social">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="image-section">
          <img src="/snef.jpg">
        </div>
      </div>
    </div>
    @stop
  </body>
</html>
