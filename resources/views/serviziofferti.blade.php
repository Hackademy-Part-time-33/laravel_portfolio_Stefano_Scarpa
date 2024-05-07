<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  {{-- link css --}}
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Homepage</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('chisono')}}">Chi Sono</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('serviziofferti')}}">Servizi Offerti</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 div-title">
        <h1 class="text-center">Servizi Offerti</h1>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 div-list">
        <ul class="service-list p-auto">
          @foreach ($servizi as $element)
          {{-- <li>
            <a href="{{ route('service', ['serviziofferti' => $element['uri']])}}">{{$element['name']}}</a>
          </li> --}}
          <li class="pt-5">
            <a href="{{route('service', ['dettaglio' => $element['name']])}}">
              <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/seed/picsum/200" class="card-img-top" alt="img">
                <div class="card-body">
                  <p class="card-text">{{$element['name']}}</p>
                </div>
              </div>
              
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>