@extends('layouts.master')
@section('title','aboutus')
@section('content')

  <!-- Jumbotron -->
  <div class="container">
  <div class="p-5 text-center bg-light">
    <h3 class="mb-3">About Us</h3>
    <h4 class="mb-3">laravel group</h4>
  </div>
  </div>
  <!-------------------- Jumbotron ------------------>




  <div class="container">

<div class="row">

<div class="col-sm-3">

  <div class="card" style="width: 18rem;">

    <img src="https://avatars.githubusercontent.com/u/100231188?v=4" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{$first}}</h5>
     <a href="https://github.com/taebah-alshlouh"><i class="fab fa-github"></i></a> 
  </div>
</div>

</div>
<div class="col-sm-3">
<div class="card" style="width: 18rem;">
  <img src="https://github.com/marwanseerat/marwanseerat/blob/84475e4563a6e6bebe356c3b9ed4c5c7559425a1/c7c11b80-4602-4d61-9e9c-0dce4cf20a19.jpg?raw=true" class="card-img-top" alt="..." height="290px">
  <div class="card-body">
    <h5 class="card-title">{{$secound}}</h5>
    <a href="https://github.com/marwanseerat"><i class="fab fa-github"></i></a>
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 18rem;">
  <img src="https://avatars.githubusercontent.com/u/100213753?v=4" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$third}}</h5>
    <a href="https://github.com/Dua-Alsafasfeh"><i class="fab fa-github"></i></a>   
  </div>
</div>
</div>
<div class="col-sm-3">
<div class="card" style="width: 18rem;">
  <img src="https://avatars.githubusercontent.com/u/100212231?v=4" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$forth}}</h5>
    <a href="https://github.com/10-anasAllawafeh"><i class="fab fa-github"></i></a>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
