<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuscriptionSignupController extends Controller
{
    public function suscriptions()
    {
        return view('/suscription/suscription');
    }
}
