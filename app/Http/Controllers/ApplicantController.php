<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Listado de candidatos
     *
     * @return \Illuminate\Http\Response
     */

    public function applicant()
    {
        $applicant = Applicant::all();
//        dd($applicant);
        return view('recluiter.applicant',['applicants' => $applicant]);
    }
}
