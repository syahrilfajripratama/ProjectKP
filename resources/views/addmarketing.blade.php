@extends('layouts.BMNav')

@section('container')
  <h1>Tambahkan Marketing Baru</h1>
  <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingName" placeholder="Enter your Fullname">
      <label for="floatingName">Full Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingNPWP" placeholder="Enter your NPWP">
      <label for="floatingNPWP">NPWP</label>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">@</span>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingUsername" placeholder="Username">
        <label for="floatingUsername">Username</label>
      </div>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="d-grid gap-2">
      <a href=""><button class="btn btn-primary" type="button">Submit</button></a>
    </div>
@endsection
