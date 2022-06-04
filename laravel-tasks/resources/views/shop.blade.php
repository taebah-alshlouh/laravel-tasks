@extends('layouts.master')
@section('title','shop')
@section('content')
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="shop">shop</a>
        </li>
      </ol>
    </nav>
  </div>
</nav>
</div>
</div>
<br>
<div class="container">
<div class="row">
@foreach ($candy as $sweets)
<div class="col-sm-3">
  <div class="card" style="width: 20rem;">
    <img src="{{ $sweets->img }}" class="card-img-top" alt="chocolate">
    <div class="card-body">
    <h5 class="card-title">{{ $sweets->candy_name }}</h5>
    <span>Price: ${{ $sweets->candy_price }} </span> <br>
     <a href="#" class="btn btn-danger">BUY</a>
  </div>
</div>
</div>
<br>
<br>
@endforeach

</div>
</div>

@endsection