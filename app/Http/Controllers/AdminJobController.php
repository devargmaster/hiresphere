<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    /**
     * Muesstra un listado de trabajos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = auth()->user()->jobs()->orderBy('created_at', 'desc')->paginate(10);
        return view('recluiter.jobs', ['jobs' => $jobs]);
    }
    /**
     * Muestra el formulario para crear un nuevo trabajo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recluiter.addjob');
    }
    /**
     * Almacena un trabajo recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $job = new Job;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->user_id = auth()->user()->id;
        $job->company_name= $request->company_name;
        $job->location= $request->location;
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $job->image = $imagePath;
        }
        $job->save();

        return redirect()->route('recluiter.jobs.index')->with('success', 'Se guardo.');
    }
    /**
     * Muestra el formulario para editar el trabajo especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('recluiter.editjob', ['job' => $job]);
    }
    /**
     * Actualiza el trabajo especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $job = Job::find($id);
        $job->title = $request->title;
        $job->description = $request->description;
        $job->save();

        return redirect()->route('recluiter.jobs.index');
    }
    /**
     * Elimina el trabajo especificado del almacenamiento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $job = Job::find($id);
            $job->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == 23000) {
                return redirect()->back()->withErrors(['error' => 'No se puede eliminar este trabajo porque tiene postulantes asociados.']);
            }
            throw $e;
        }

        return redirect()->route('recluiter.jobs.index');
    }
    /**
     * Muestra los trabajos con solicitantes.
     *
     * @return \Illuminate\Http\Response
     */
    public function showApplicants()
    {
        $search = request('search');

        $jobs = Job::whereHas('applicants', function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('recluiter.applicantjobs', compact('jobs'));
    }
    /**
     * Muestra el formulario de confirmación para eliminar el trabajo especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmDelete($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.confirmDelete', ['job' => $job]);
    }
}
