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
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg nav-custom">
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

    {{-- prima sezione --}}

    <div class="container">
      <div class="row div-custom">
        <div class="col-12 col-md-6 d-flex justify-content-center align-items-start flex-column">
          <h1 class="display-4 fw-bold">Hi, I'm Stefano Scarpa<br> I'm a Web Developer</h1>
          <p class="fw-lighter">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo laborum excepturi nobis labore quos, deserunt est maxime 
          </p>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
          <img src="asset/IMG_7459.jpg" class="img-custom img-fluid" alt="foto">
        </div>
      </div>
    </div>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>