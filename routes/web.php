<?php

use Illuminate\Support\Facades\Route;


// rotte statiche

Route::get('/', function () {
    return view('welcome');
})-> name('homepage');

Route::get('/chi-sono', function () {
    return view('chisono');
})-> name('chisono');

Route::get('/servizi-offerti', function () {
    $servizi = [
        ['name' => 'Siti Web', 'uri' => 'siti-web'],
        ['name' => 'Negozi Digitali', 'uri' => 'ecommerce'],
        ['name' => 'Gestionali in Cloud', 'uri' => 'gestionali-cloud'],
        ['name' => 'Marketing Digitale', 'uri' => 'marketing-digitale'],
    ];
    return view('serviziofferti', ['servizi' => $servizi]);
}) -> name('serviziofferti');


// rotta dinamica

Route::get('/dettaglio-servizio/{dettaglio}', function ($dettaglio) {
    return view('service', ['ciccio' => $dettaglio]);
}) -> name('service');