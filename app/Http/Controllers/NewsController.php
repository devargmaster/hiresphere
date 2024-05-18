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
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        return view('news', ['news' => $news]);
    }
    public function show($id)
    {
        $new = News::find($id);
        return view('news.show', compact('new'));
    }
}
