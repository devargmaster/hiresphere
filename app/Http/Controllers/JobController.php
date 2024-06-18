<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Muestra los trabajos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = auth()->user()->jobs()->orderBy('created_at', 'desc')->paginate(10);
        return view('jobs', ['jobs' => $jobs]);
    }
    /**
     * Muestra un trabajo
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Aplica a un trabajo
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function apply(Request $request, Job $job)
    {
        if ((auth()->user()->isReclutador()) || (auth()->user()->isAdmin())) {
            return redirect()->back()->with('error', 'No podes aplicar a un empleo si sos reclutador o admin.');
        }
        $userId = auth()->user()->id;
        $applicant = Applicant::where('user_id', $userId)->first();
        if (!$applicant) {
            return redirect()->route('profile.show')->with('error', 'Necesitas completar tu perfil antes de postularte.');
        }
        try {
            $job->applicants()->attach(auth()->user()->id);
            return redirect()->back()->with('success', 'Has aplicado al trabajo exitosamente.');
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return redirect()->back()->with('error', 'Ya has aplicado a este trabajo.');
            }
            return redirect()->back()->with('error', 'Ha ocurrido un error al aplicar al trabajo.');
        }
    }
}
