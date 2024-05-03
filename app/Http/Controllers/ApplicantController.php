<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function applicant()
    {
        $applicant = Applicant::all();
//        dd($applicant);
        return view('recluiter.applicant',['applicants' => $applicant]);
    }
}
