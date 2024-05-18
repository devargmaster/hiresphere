<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    /**
     * Muestra el formulario de edición del perfil del usuario
     *
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Actualiza el perfil del usuario
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'resume' => 'required',
            'cover_letter' => 'required',
            'notes' => 'required',
        ]);

        $user = Auth::user();
        $user->update($request->only('name', 'email'));

        $applicant = $user->applicant;
        $applicant->update($request->only(
            'phone',
            'address',
            'city',
            'state',
            'zip',
            'country',
            'resume',
            'cover_letter',
            'status',
            'notes',
            'referrer'));

        return redirect()->route('profile.show')->with('status', 'Perfil actualizado con éxito');
    }
    /**
     * Muestra el menú del usuario
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $user = auth()->user();
        return view('profile.menu', compact('user'));
    }
    /**
     * Muestra el perfil del usuario
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = auth()->user();
        return view('profile.show', compact('user'));
    }
}
