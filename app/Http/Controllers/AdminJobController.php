<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('recluiter.jobs', ['jobs' => $jobs]);
    }
    public function create()
    {
        return view('recluiter.addjob');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $job = new Job;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->user_id = auth()->user()->id;
        $job->save();

        return redirect()->route('recluiter.jobs.index');
    }
    public function edit($id)
    {
        $job = Job::find($id);
        return view('recluiter.editjob', ['job' => $job]);
    }

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

    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect()->route('recluiter.jobs.index');
    }

    public function showApplicants()
    {
        $search = request('search');

        $jobs = Job::whereHas('applicants', function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('recluiter.applicantjobs', compact('jobs'));
    }
}
