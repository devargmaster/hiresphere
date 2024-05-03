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
        $job->save();

        return redirect()->route('recluiter.jobs.index');
    }
}
