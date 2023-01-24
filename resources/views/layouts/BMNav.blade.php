<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Branch Manager | {{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SI Monitoring</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="bmhome">Home</a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ ($title === "Prospek") ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Prospek
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="bmProgress">On Progress</a></li>
                <li><a class="dropdown-item" href="bmValidated">Validated</a></li>
              </ul>
            </li> --}}
            {{-- <a href="{{ url('/mycontroller?href=' . $link) }}">Link</a> --}}
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Prospek") ? 'active' : '' }}" aria-current="page" href="branchManager">Prospek</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Add Marketing") ? 'active' : '' }}" aria-current="page" href="addmarketing">Add Marketing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Profile") ? 'active' : '' }}" aria-current="page" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Log Out</a>
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