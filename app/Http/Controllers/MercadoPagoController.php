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
                    'title' => 'Suscripcion HireSphere',
                    'quantity' => 1,
                    'currency_id' => 'ARS',
                    'unit_price' => 500
                ]
            ],
            'back_urls' => [
                'success' => 'http://localhost:8000/test/mercadopagook',
                'failure' => 'http://localhost:8000/test/mercadopagofail',
                'pending' => 'http://localhost:8000/test/mercadopagopending'
            ]
        ]);

        $suscriptor = auth()->user();

        return view ('test.mercadopago',
        [
            'suscriptor' => $suscriptor,
            'preference' => $preference,
            'mpPublicKey' => config('mercadopago.public_key'),
        ]);
    }
    public function success()
    {
        $mercadopagook = 'Pago exitoso';
        return view('test.mercadopagook', ['mercadopagook' => $mercadopagook]);
    }
    public function failure()
    {
        $mercadopagofail = 'Pago fallido';
        return view('test.mercadopagofail', ['mercadopagofail' => $mercadopagofail]);
    }
    public function pending()
    {
        $mercadopagopending = 'Pago pendiente';
        return view('test.mercadopagopending', ['mercadopagopending' => $mercadopagopending]);
    }
}
