<!-- resources/views/seleccionar_plan.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Seleccionar Plan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

</style>

</head>
<body>
<div>     
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    
                    <a class="navbar-brand" href="{{ url('/home') }}" >Home</a>
                    @else
                        <a class="navbar-brand" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            
                            <a class="navbar-brand" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
            
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">no</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">si </a>
          </li>


          <li class="nav-item">
            <a class="nav-link ">Plan</a>
          </li>
        </ul>
        <form class="d-flex" role="search">

        </form>
      </div>
    </div>
  </nav>
  <hr class="featurette-divider">
</header>
    <div class="container">
        <h1 class="mt-5">Seleccionar Plan</h1>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('realizar-pago') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="plan">Selecciona un plan:</label>
                <select class="form-control" name="plan" id="plan">
                    <option value="1">Plan 1</option>
                    <option value="2">Plan Estandar</option>
                    <option value="3">Plan 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="voucher">Sube tu voucher:</label>
                <input type="file" class="form-control-file" name="voucher" id="voucher" required>
            </div>
            <button type="submit" class="btn btn-dark">Realizar pago</button>
        </form>
    </div>
</body>
</html>