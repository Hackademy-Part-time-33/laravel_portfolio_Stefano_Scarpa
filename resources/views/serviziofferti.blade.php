<x-main>

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
              <div class="card card-skills" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top rounded-5" alt="img">
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
  
</x-main>