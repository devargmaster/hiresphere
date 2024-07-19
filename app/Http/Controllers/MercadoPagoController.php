<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    public  function show()
    {
        //Buscar cliente para cobrar suscripcion por medio de mercadopago
        $suscriptor = auth()->user();
        // mostrar la vista de mercadopago
        return view ('test.mercadopago');
    }
}
