<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    /**
     * Muestra las noticias
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news', ['news' => $news]);
    }
}
