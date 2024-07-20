<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller
{
    /**
     * @throws MPApiException
     */
    public  function show()
    {
        MercadoPagoConfig::setAccessToken(config('mercadopago.access_token'));


        $client = new PreferenceClient();
        $preference = $client->create([
            'items' => [
                [
                    'title' => 'Suscripcion',
                    'quantity' => 1,
                    'currency_id' => 'ARS',
                    'unit_price' => 1000
                ]
            ],
            'back_urls' => [
                'success' => 'http://localhost:8000/mercadopago/success',
                'failure' => 'http://localhost:8000/mercadopago/failure',
                'pending' => 'http://localhost:8000/mercadopago/pending'
            ]
        ]);


        //Buscar cliente para cobrar suscripcion por medio de mercadopago
        $suscriptor = auth()->user();
        // mostrar la vista de mercadopago
        return view ('test.mercadopago',
        [
            'suscriptor' => $suscriptor,
            'preference' => $preference,
            'mpPublicKey' => config('mercadopago.public_key'),
        ]);
    }
}
