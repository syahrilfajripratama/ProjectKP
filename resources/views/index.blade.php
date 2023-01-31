<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <div class="container mt-4">
      @if(session()->has('failedLogin'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('failedLogin') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">SISTEM INFORMASI MONITORING PROSPEK MARKETING</h1>
            <form action="/index" method="post">
              @csrf
              <center><img class="mb-4" src="/img/btg.png" alt="" width="150"></center>         
              <div class="form-floating">
                <input type="email" name="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" required autofocus value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            </form>
          </main>
    </div>
    
  </body>
</html>