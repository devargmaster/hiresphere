<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Listado de candidatos
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
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
    public function index(Request $request)
    {
        echo 'index';
        $search = $request->input('search');
        $roleId = 5;
        $applicants = Applicant::query()
            ->whereHas('user', function ($query) use ($roleId) {
                $query->where('role_id', $roleId);
            })
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%");
            })
            ->get();

        return view('recluiter.applicant', compact('applicants'));
    }

}
