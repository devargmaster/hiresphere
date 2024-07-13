<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                'job_id' => 0,
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $user->update($request->only('name', 'email'));

        $applicant = $user->applicant;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $applicant->image = $name;
            $applicant->save();
        }

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
            'referrer'
        ));

        return redirect()->route('profile.show')->with('status', 'Perfil actualizado con éxito');
    }
    /**
     * Muestra el menú del usuario
     *
     * @return \Illuminate\Http\Response
     */
    public function menu(): \Illuminate\Http\Response
    {
        $user = auth()->user();
        return view('profile', compact('user'));
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
    public function ChangePassword()
    {
        return view('profile.change-password');
    }

    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'La contraseña actual es incorrecta']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('profile.show')->with('status', 'Contraseña actualizada con éxito');
    }
}
