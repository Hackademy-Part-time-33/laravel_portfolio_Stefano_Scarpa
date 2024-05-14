<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
   public static $services = [
    [
        'uri' => 'gestionale',
        'name' => 'Sistema Gestionali',
        'costo' => 1500,
        'tempo_di_realizzazione' => '2 settimane',
        'img' => '/img/default.png'
    ],
    [
        'uri' => 'ecommerce',
        'name' => 'Piattaforma eCommerce',
        'costo' => 2500,
        'tempo_di_realizzazione' => '3 settimane',
        'img' => '/img/default.png'
    ],
    [
        'uri' => 'siti-web',
        'name' => 'Siti Web',
        'costo' => 1000,
        'tempo_di_realizzazione' => '1 settimana',
        'img' => '/img/default.png'
    ],
    [
        'uri' => 'consulenza',
        'name' => 'Consulenza Web',
        'costo' => 3500,
        'tempo_di_realizzazione' => '4 settimane',
        'img' => '/img/default.png'
    ],
];


    public function serviziofferti() {
        
        return view('serviziofferti', ['servizi' => self::$services]);
    }

    public function service($dettaglio) {

        foreach (self::$services as $element){
            if ($dettaglio == $element['uri']) {
                return view('service', ['ciccio' => $dettaglio]);
            }
        }
        abort(404);
    }

    public function contact(){
        return view('contact');
    }

    public function send(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|min:15',
        ]);

        $data = [
            'nome' => $request->fullname,
            'indirizzo' => $request->input('email'),
            'telefono' => '+39' . $request->input('phone'),
            'messaggio' => $request->message,
        ];

        //use Illuminate\Support\Facades\Mail;
        Mail::to('admin@stefano.it')->send(new ContactMail($data));
        //QUi invio i dati appena mappati alla classe ContactMail
        return redirect()->route('thankyou');
    }

    public function thankyou(){
        return view('thankyou');
    }
}
