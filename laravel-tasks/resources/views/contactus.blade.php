@extends('layouts.master')
@section('title','contactus')
@section('content')
  <!-- Jumbotron -->
  <div class="container">
  <div class="p-5 text-center bg-light">
    <h4 class="mb-3">Contact Us</h4>
    <h5 class="mb-3">Got a question? Check out our FAQ section! It is laden with pertinent information and amusing anecdotes.</h5>
  </div>
  </div>
  <!-- Jumbotron -->

<div class="container">
    <div class="row">
        <div class="col-sm-6">
<div class="container">
      <!-- Jumbotron -->
  <div class="container">
  <div class="p-5 text-center bg-light">
    <h4 class="mb-3">Send us a message! We'll get right back to you!</h4>
  </div>
  </div>
  <!-- Jumbotron -->
</div>
<form>
    <!-- <h4>Send us a message! We'll get right back to you!</h4> -->
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">First name</label>
        <input type="text" id="form6Example1" class="form-control" />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Last name</label>
        <input type="text" id="form6Example2" class="form-control" />
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example3">Message</label>
    <input type="text" id="form6Example3" class="form-control" />
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example4">Address</label>
    <input type="text" id="form6Example4" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example5">Email</label>
    <input type="email" id="form6Example5" class="form-control" />
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example6">Phone</label>
    <input type="number" id="form6Example6" class="form-control" />
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example7">Additional information</label>
    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
  </div>
  <!-- Submit button -->
  <button type="submit" class="btn  btn-lg btn-danger btn-block mb-5">
    send
  </button>
</form>
</div>

<div class="col-sm-6">
    <div class="container">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d108338.62122834331!2d35.936470526464845!3d31.945106463231618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1654008307954!5m2!1sen!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>
<br>
<br>

@endsection
  