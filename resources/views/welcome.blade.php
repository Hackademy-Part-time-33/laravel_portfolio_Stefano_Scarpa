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
    <nav class="navbar navbar-expand-lg nav-custom fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="41" fill="none" viewBox="0 0 54 41"><path fill="#2A2E4E" d="M54 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"></path><path fill="#2A2E4E" fill-rule="evenodd" d="M13.75 40.794C6.156 40.794 0 34.638 0 27.044V1h5v26.044a8.75 8.75 0 0 0 8.75 8.75c4.893 0 8.75-3.771 8.75-8.544h5v7.5a1.25 1.25 0 0 0 2.5 0v-8.875a6.25 6.25 0 0 1-7.5-6.125V7.25a6.25 6.25 0 1 1 12.5 0v27.5a1.25 1.25 0 1 0 2.5 0V7.25a6.25 6.25 0 1 1 12.5 0v27.5a6.25 6.25 0 0 1-10 5A6.222 6.222 0 0 1 36.25 41a6.222 6.222 0 0 1-3.75-1.25 6.251 6.251 0 0 1-9.466-2.47c-2.456 2.197-5.723 3.514-9.284 3.514Zm30-4.794c-.69 0-1.25-.56-1.25-1.25V7.25a1.25 1.25 0 1 1 2.5 0v27.5c0 .69-.56 1.25-1.25 1.25ZM30 19.75a1.25 1.25 0 0 1-2.5 0V7.25a1.25 1.25 0 1 1 2.5 0v12.5Z" clip-rule="evenodd"></path><path fill="#2A2E4E" fill-rule="evenodd" d="M7.5 27.25a6.25 6.25 0 1 0 12.5 0v-20a6.25 6.25 0 1 0-12.5 0v20Zm6.25 1.25c-.69 0-1.25-.56-1.25-1.25v-20a1.25 1.25 0 1 1 2.5 0v20c0 .69-.56 1.25-1.25 1.25Z" clip-rule="evenodd"></path></svg></a>
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
  
    
    {{-- footer --}}

    <div class="container-fluid bg-white">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 border-top">
        <div class="col mb-3">
          <a class="navbar-brand" href="{{route('homepage')}}"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="41" fill="none" viewBox="0 0 54 41"><path fill="#2A2E4E" d="M54 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"></path><path fill="#2A2E4E" fill-rule="evenodd" d="M13.75 40.794C6.156 40.794 0 34.638 0 27.044V1h5v26.044a8.75 8.75 0 0 0 8.75 8.75c4.893 0 8.75-3.771 8.75-8.544h5v7.5a1.25 1.25 0 0 0 2.5 0v-8.875a6.25 6.25 0 0 1-7.5-6.125V7.25a6.25 6.25 0 1 1 12.5 0v27.5a1.25 1.25 0 1 0 2.5 0V7.25a6.25 6.25 0 1 1 12.5 0v27.5a6.25 6.25 0 0 1-10 5A6.222 6.222 0 0 1 36.25 41a6.222 6.222 0 0 1-3.75-1.25 6.251 6.251 0 0 1-9.466-2.47c-2.456 2.197-5.723 3.514-9.284 3.514Zm30-4.794c-.69 0-1.25-.56-1.25-1.25V7.25a1.25 1.25 0 1 1 2.5 0v27.5c0 .69-.56 1.25-1.25 1.25ZM30 19.75a1.25 1.25 0 0 1-2.5 0V7.25a1.25 1.25 0 1 1 2.5 0v12.5Z" clip-rule="evenodd"></path><path fill="#2A2E4E" fill-rule="evenodd" d="M7.5 27.25a6.25 6.25 0 1 0 12.5 0v-20a6.25 6.25 0 1 0-12.5 0v20Zm6.25 1.25c-.69 0-1.25-.56-1.25-1.25v-20a1.25 1.25 0 1 1 2.5 0v20c0 .69-.56 1.25-1.25 1.25Z" clip-rule="evenodd"></path></svg></a>
          <p class="text-body-secondary">© 2024</p>
        </div>
    
        <div class="col mb-3">
    
        </div>
    
        <div class="col mb-3">
          <h5 class="text-black">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="{{route('chisono')}}">Chi Sono</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="{{route('serviziofferti')}}">Servizi Offerti</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
    
        <div class="col mb-3">
          <h5 class="text-black">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="{{route('chisono')}}">Chi Sono</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="{{route('serviziofferti')}}">Servizi Offerti</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
    
        <div class="col mb-3">
          <h5 class="text-black">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="{{route('chisono')}}">Chi Sono</a></li>
            <li class="nav-item mb-2"><a class="nav-link p-0 text-body-secondary" href="{{route('serviziofferti')}}">Servizi Offerti</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
      </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>