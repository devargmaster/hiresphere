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
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.editnews', ['news' => $news]);
    }
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->update($request->all());
        return redirect()->route('admin.news.index');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
