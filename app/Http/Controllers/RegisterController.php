<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    /**
     * Guarda un nuevo usuario en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
        ]);

        auth()->login($user);

        return redirect()->route('home')
            ->with('feedback.message', 'Registro exitoso!');
    }
    /**
     * Muestra el formulario de registro
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }
}
