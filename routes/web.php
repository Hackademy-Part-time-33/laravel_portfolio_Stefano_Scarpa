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

// rotte form
route::get('/contatti', [PageController::class, 'contact'])->name('contact');
route::post('/send' , [PageController::class, 'send'])->name('send');


route::get('/grazie' , [PageController::class, 'thankyou'])->name('thankyou');

