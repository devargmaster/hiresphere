<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuscriptionSignupController extends Controller
{
    /**
     * Muestra las suscripciones.
     *
     * @return \Illuminate\Http\Response
     */
    public function suscriptions()
    {
        return view('suscription.suscription');
    }
}
