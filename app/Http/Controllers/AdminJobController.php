<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('recluiter.jobs', ['recluiter.jobs.index' => $jobs]);
    }
}
