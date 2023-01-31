<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Marketing | {{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="bi bi-display"><strong> SIMPM</strong></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/mhome">Home</a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link {{ ($title === "Prospek") ? 'disabled' : '' }} dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Prospek
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="on-progress">On Progress</a></li>
                <li><a class="dropdown-item" href="validated">Validated</a></li>
              </ul>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Prospek") ? 'active' : '' }}" aria-current="page" href="/marketing">Prospek</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Profile") ? 'active' : '' }}" aria-current="page" href="/marketing/Profile">Profile</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('actionlogout') }}"><i class="bi bi-box-arrow-right"></i> Log Out</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
        @yield('container')
    </div>
    
  </body>
</html>