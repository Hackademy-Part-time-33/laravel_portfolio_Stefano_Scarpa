{{-- <p>l'utente {{ $data['nome'] }} ti ha scritto un messaggio:</p>
<p>{{ $data['messaggio'] }}</p>
<p>I suoi contatti sono:</p>
<p>Nome: {{ $data['nome'] }}</p>
<p>Numero: {{ $data['telefono'] }}</p>
<p>Email: {{ $data['indirizzo'] }}</p> --}}

<body class="container-fluid" style="background-color: #e4e4e4; min-height: 300px; width: 100%; margin: 0px;">
    <div class="row" style="width: 100%;">
        <div class="col-12" style="width: 100%; padding: 20px;">
            <h2 class="text-center" style="text-align: center;">Sei stato contattato da {{ $data['nome'] }}</h2>
            <h2 class="text-center" style="text-align: center;">i suoi contatti sono:</h2>
            <h3 class="text-center" style="text-align: center;">Nome: {{ $data['nome'] }}</h3>
            <h3 class="text-center" style="text-align: center;">Numero: {{ $data['telefono'] }}</h3>
            <h3 class="text-center" style="text-align: center;">Email: {{ $data['indirizzo'] }}</h3>
        </div>
        <div class="col-12" style="background-color: #e92d2d; width: 100%; min-height: 300px; margin: 0px; padding: 20px;">
            <h3 class="text-center" style="text-align: center;">Il suo messaggio è:</h3>
            <p style="text-align: center;">{{ $data['messaggio'] }}</p>
        </div>
    </div>
</body>