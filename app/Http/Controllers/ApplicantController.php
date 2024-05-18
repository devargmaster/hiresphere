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
        $roleId = 5;

        $applicants = Applicant::whereHas('user', function ($query) use ($roleId) {
            $query->where('role_id', $roleId);
        })->get();

        return view('recluiter.applicant', ['applicants' => $applicants]);
    }
    public function show($id)
    {
        $applicant = Applicant::find($id);
        return view('applicants.show', compact('applicant'));
    }
}
