<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    /**
     * Muestra una noticia específica
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::find($id);
        return view('news.show', compact('new'));
    }

    /**
     * Muestra el formulario para crear una nueva noticia
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addnews');
    }

    /**
     * Almacena una nueva noticia
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'brief' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $news = new News();
        $news->title = $request->input('title');
        $news->brief = $request->input('brief');
        $news->content = $request->input('content');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $news->image = basename($imagePath);
        }

        $news->save();

        return redirect()->route('admin.news.index')->with('success', 'Noticia creada correctamente.');
    }
}
