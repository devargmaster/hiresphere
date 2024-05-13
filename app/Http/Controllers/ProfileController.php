<?php

namespace App\Http\Controllers;

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
        return view('profile.edit', compact('user'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile');
    }

    public function show()
    {
        $user = auth()->user();
        return view('profile.show', compact('user'));
    }
}
