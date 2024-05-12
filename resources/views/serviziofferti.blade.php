<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body>

  <x-navbar />


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
            <a class="text-decoration-none" href="{{route('service', ['dettaglio' => $element['uri']])}}">
              <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="img">
                <div class="card-body">
                  <p class="card-text fw-semibold text-center">{{$element['name']}}</p>
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