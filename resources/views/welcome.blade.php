<x-main>
  
  <div class="social">
    <span class="line rounded-5"></span>
    <ul>
      <li class="nav-item"><a class="nav-link" href="#">In</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Gh</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Ln</a></li>
    </ul>
  </div> 
  
  {{-- prima sezione --}}
  
  <div class="container">
    <div class="row div-custom">
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-start flex-column">
        <h1 class="display-4 fw-bold titolo-sm">Hi, I'm Stefano Scarpa<br> I'm a <span class="title-color">Web Developer</span></h1>
        <p class="fw-lighter">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo laborum excepturi nobis labore quos, deserunt est maxime 
        </p>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <img src="asset/IMG_7459.jpg" class="img-custom img-fluid ms-md-5" alt="foto">
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center align-items-center">
        <span class="material-symbols-outlined expand_icon">
          expand_more
        </span>
      </div>
    </div>
  </div>
  
  
  {{-- seconda sezione --}}
  
  <div class="container">
    <div class="row my-5 div-about justify-content-center align-items-center">
      <div class="col-12 col-md-4">
        <img src="asset/IMG_5344.jpg" class="img-about img-sezione" alt="img-about">
      </div>
      <div class="col-12 col-md-8 list_about">
        <h2 class="mt-2 mb-5 fw-bold display-4 title-about">Chi sono</h2>
        <div class="d-flex">
          <p class="fw-lighter me-3">Nome:</p>
          <p class="fw-semibold">Stefano</p>
        </div>
        <div class="d-flex">
          <p class="fw-lighter me-3">Cognome:</p>
          <p class="fw-semibold">Scarpa</p>
        </div>
        <div class="d-flex">
          <p class="fw-lighter me-3">Città:</p>
          <p class="fw-semibold">Venezia</p>
        </div>
        <div class="d-flex">
          <p class="fw-lighter me-3">Ruolo: </p>
          <p class="fw-semibold"> Junior Web developer</p>
        </div>
      </div>
    </div>
  </div>
  
  {{-- terza sezione con le skills --}}
  
  <div class="container div-skills">
    <h2 class="title-skills fw-bold display-4 text-center m-5">Skills</h2>
    <div class="row my-3 justify-content-center align-items-center">
      <div class="col-12 col-md-3">
        {{-- card --}}
        <div class="card card-skills my-2">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <i class="fa-brands fa-html5 h1"></i>
            <h5 class="card-title m-3 h3 fw-lighter">HTML5</h5>
          </div>
        </div>
        {{-- fine card --}}
      </div>
      <div class="col-12 col-md-3">
        {{-- card --}}
        <div class="card card-skills my-2">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <i class="fa-brands fa-css3-alt h1"></i>
            <h5 class="card-title m-3 h3 fw-lighter">CSS</h5>
          </div>
        </div>
        {{-- fine card --}}
      </div>
      <div class="col-12 col-md-3">
        {{-- card --}}
        <div class="card card-skills my-2">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <i class="fa-brands fa-js h1"></i>
            <h5 class="card-title m-3 h3 fw-lighter">JS</h5>
          </div>
        </div>
        {{-- fine card --}}
      </div>
      <div class="col-12 col-md-3">
        {{-- card --}}
        <div class="card card-skills my-2">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <i class="fa-brands fa-git-alt h1"></i>
            <h5 class="card-title m-3 h3 fw-lighter">GIT</h5>
          </div>
        </div>
        {{-- fine card --}}
      </div>
    </div>
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-3">
        {{-- card --}}
        <div class="card card-skills my-2">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <i class="fa-brands fa-bootstrap h1"></i>
            <h5 class="card-title m-3 h3 fw-lighter">BOOTSTRAP</h5>
          </div>
        </div>
        {{-- fine card --}}
      </div>
      <div class="col-12 col-md-3">
        {{-- card --}}
        <div class="card card-skills my-2">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <i class="fa-brands fa-laravel h1"></i>
            <h5 class="card-title m-3 h3 fw-lighter">LARAVEL</h5>
          </div>
        </div>
        {{-- fine card --}}
      </div>
      <div class="col-12 col-md-3">
        {{-- card --}}
        <div class="card card-skills my-2">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <i class="fa-brands fa-php h1"></i>
            <h5 class="card-title m-3 h3 fw-lighter">PHP</h5>
          </div>
        </div>
        {{-- fine card --}}
      </div>
      <div class="col-12 col-md-3">
        {{-- card --}}
        <div class="card card-skills my-2">
          <div class="card-body d-flex justify-content-center align-items-center flex-column">
            <span class="material-symbols-outlined h1">
              desktop_windows
            </span>
            {{-- <i class="fa-regular fa-desktop h1"></i> --}}
            <h5 class="card-title m-3 h3 fw-lighter">UI/UX DESIGN</h5>
          </div>
        </div>
        {{-- fine card --}}
      </div>
    </div>
  </div>
  
  {{-- fine terza sezione --}}
  
</x-main>