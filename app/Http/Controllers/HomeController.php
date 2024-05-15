<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Muestra la vista principal
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('principal');
    }
    /**
     * Muestra la vista about
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }
}
