<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.profile');
    }
    public function edit()
    {
        $user = auth()->user();
        $applicant = Applicant::firstOrCreate(
            ['user_id' => $user->id],
            [
                'user_id' => $user->id,
                'name' => '',
                'email' => '',
                'phone' => '',
                'address' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'country' => '',
                'resume' => '',
                'cover_letter' => '',
                'job_id' => '',
                'status' => '',
                'notes' => '',
                'source' => '',
                'ip_address' => '',
                'user_agent' => '',
                'referrer' => '',
                'applied_at' => now(),
            ]
        );
        return view('profile.edit', ['user' => $user, 'applicant' => $applicant]);
    }
    public function update(Request $request)
    {
        $user = auth()->user();
        $user->update($request->only('name', 'email'));

        $applicant = Applicant::firstOrCreate(['user_id' => $user->id]);
        $applicant->update($request->only('name', 'email', 'phone', 'address', 'city', 'state', 'zip', 'country', 'resume', 'cover_letter', 'job_id', 'status', 'notes', 'source', 'ip_address', 'user_agent', 'referrer', 'applied_at'));

        return redirect()->route('profile.show')->with('success', 'Perfil actualizado exitosamente.');
    }

    public function menu()
    {
        $user = auth()->user();
        return view('profile.menu', compact('user'));
    }
    public function show()
    {
        $user = auth()->user();
        return view('profile.show', compact('user'));
    }
}
