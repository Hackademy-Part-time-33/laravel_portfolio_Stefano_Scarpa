<div>
   
    <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio</title>
  {{-- CDN google icon --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,0,-25" />
  {{-- CDN fontawsome --}}
  <script src="https://kit.fontawesome.com/a3187457e5.js" crossorigin="anonymous"></script>
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body>
  
  <x-navbar />
  
  {{-- sezione social --}}
  
  {{ $slot }}
  
  
  {{-- footer --}}
  
  <div class="container-fluid bg-white">
    <div class="container bg-white">
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 border-top">
        <div class="col mb-3">
          <a class="navbar-brand" href="{{route('homepage')}}"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="41" fill="none" viewBox="0 0 54 41"><path fill="#2A2E4E" d="M54 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"></path><path fill="#2A2E4E" fill-rule="evenodd" d="M13.75 40.794C6.156 40.794 0 34.638 0 27.044V1h5v26.044a8.75 8.75 0 0 0 8.75 8.75c4.893 0 8.75-3.771 8.75-8.544h5v7.5a1.25 1.25 0 0 0 2.5 0v-8.875a6.25 6.25 0 0 1-7.5-6.125V7.25a6.25 6.25 0 1 1 12.5 0v27.5a1.25 1.25 0 1 0 2.5 0V7.25a6.25 6.25 0 1 1 12.5 0v27.5a6.25 6.25 0 0 1-10 5A6.222 6.222 0 0 1 36.25 41a6.222 6.222 0 0 1-3.75-1.25 6.251 6.251 0 0 1-9.466-2.47c-2.456 2.197-5.723 3.514-9.284 3.514Zm30-4.794c-.69 0-1.25-.56-1.25-1.25V7.25a1.25 1.25 0 1 1 2.5 0v27.5c0 .69-.56 1.25-1.25 1.25ZM30 19.75a1.25 1.25 0 0 1-2.5 0V7.25a1.25 1.25 0 1 1 2.5 0v12.5Z" clip-rule="evenodd"></path><path fill="#2A2E4E" fill-rule="evenodd" d="M7.5 27.25a6.25 6.25 0 1 0 12.5 0v-20a6.25 6.25 0 1 0-12.5 0v20Zm6.25 1.25c-.69 0-1.25-.56-1.25-1.25v-20a1.25 1.25 0 1 1 2.5 0v20c0 .69-.56 1.25-1.25 1.25Z" clip-rule="evenodd"></path></svg></a>
          <p class="text-body-secondary">© 2024</p>
        </div>
        
        <div class="col mb-3">
          
        </div>
        
        <div class="col mb-3">
          <h5 class="text-black fw-semibold">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link-foot p-0" href="{{route('chisono')}}">Chi Sono</a></li>
            <li class="nav-item mb-2"><a class="nav-link-foot p-0" href="{{route('serviziofferti')}}">Servizi Offerti</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">About</a></li>
          </ul>
        </div>
        
        <div class="col mb-3">
          <h5 class="text-black fw-semibold">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link-foot p-0" href="{{route('chisono')}}">Chi Sono</a></li>
            <li class="nav-item mb-2"><a class="nav-link-foot p-0" href="{{route('serviziofferti')}}">Servizi Offerti</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">About</a></li>
          </ul>
        </div>
        
        <div class="col mb-3">
          <h5 class="text-black fw-semibold">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a class="nav-link-foot p-0" href="{{route('chisono')}}">Chi Sono</a></li>
            <li class="nav-item mb-2"><a class="nav-link-foot p-0" href="{{route('serviziofferti')}}">Servizi Offerti</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link-foot p-0">About</a></li>
          </ul>
        </div>
      </footer>
    </div>
  </div>
  
  
  
  {{-- <script src="/js/main.js"></script> --}}
</body>
</html>
</div>