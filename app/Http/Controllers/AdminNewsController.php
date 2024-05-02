<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news', ['news' => $news]);
    }

    public function create()
    {
        return view('admin.addnews');
    }

    public function store(Request $request)
    {
        News::create($request->all());
        return redirect()->route('admin.news.index');
    }
}
