@extends('layouts.BMNav')

@section('container')
  <h1>Tambahkan Marketing Baru</h1>
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <main class="form-registration w-100 m-auto"> 
    <form action="/addmarketing" method="post">
      @csrf
      <div class="form-floating mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter your Fullname" required value="{{ old('name') }}">
          <label for="name">Full Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" placeholder="Enter your NIP" required value="{{ old('nip') }}">
          <label for="nip">NIP</label>
          @error('nip')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">@</span>
          <div class="form-floating">
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('usernmae') }}">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required >
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="d-grid gap-2">
          <a href=""><button class="btn btn-primary" type="submit">Add Marketing</button></a>
        </div>
    </form>
  </main>
@endsection
