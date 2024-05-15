<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    /**
     * Muestra todas las noticias.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news', ['news' => $news]);
    }
    /**
     * Muestra el formulario para crear una nueva noticia.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.addnews');
    }
    /**
     * Almacena una nueva noticia en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        News::create($request->all());
        return redirect()->route('admin.news.index')
            ->with('feedback.message', 'Se ha creado una nueva noticia');
    }
    /**
     * Muestra el formulario para editar una noticia.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.editnews', ['news' => $news]);
    }
    /**
     * Actualiza una noticia en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $input = $request->only(['title', ]);
        $news->update($request->all());
        return redirect()->route('admin.news.index')
            ->with('feedback.message', 'Se ha editado la noticia');
    }
    /**
     * Elimina una noticia de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
