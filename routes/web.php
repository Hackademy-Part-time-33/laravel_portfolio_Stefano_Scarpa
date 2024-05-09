<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

 
// rotte statiche

Route::get('/', [PublicController::class, 'homepage'])-> name('homepage');

Route::get('/chi-sono', [PublicController::class, 'chisono'])-> name('chisono');

Route::get('/servizi-offerti', [PageController::class, 'serviziofferti']) -> name('serviziofferti');


// rotta dinamica

Route::get('/dettaglio-servizio/{dettaglio}', [PageController::class, 'service']) -> name('service');