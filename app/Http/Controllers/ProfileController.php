<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $applicant = $user->applicant;

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($applicant->image) {
                Storage::delete('public/images/' . $applicant->image);
            }

            // Almacenar la nueva imagen
            $imagePath = $request->file('image')->store('public/images');
            $applicant->image = basename($imagePath);
        }


        $applicant->phone = $request->input('phone', $applicant->phone);
        $applicant->address = $request->input('address', $applicant->address);
        $applicant->city = $request->input('city', $applicant->city);
        $applicant->state = $request->input('state', $applicant->state);
        $applicant->zip = $request->input('zip', $applicant->zip);
        $applicant->country = $request->input('country', $applicant->country);
        $applicant->resume = $request->input('resume', $applicant->resume);
        $applicant->cover_letter = $request->input('cover_letter', $applicant->cover_letter);
        $applicant->notes = $request->input('notes', $applicant->notes);
        $applicant->referrer = $request->input('referrer', $applicant->referrer);

        $user->save();
        $applicant->save();

        return redirect()->route('profile.show')->with('success', 'Perfil actualizado correctamente.');
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

    public function calculateSubscriptionConversionRate()
    {

        $totalFreeSubscribers = User::where('subscription_type', 'Free')->count();


        $convertedToPaid = User::where('subscription_type', 'Premium')
            ->where('initial_subscription', 'Free')
            ->count();

        $conversionRate = 0;
        if ($totalFreeSubscribers > 0) {
            $conversionRate = ($convertedToPaid / $totalFreeSubscribers) * 100;
        }

        return $conversionRate;
    }

    /**
     * Muestra el perfil del usuario
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = auth()->user();
        if ($user->role_id == 1) {
            $totalSubscribers = User::whereNotNull('subscription_type')
                ->where('role_id', '!=', 1)
                ->count();
            $freeUsers = User::where('subscription_type', 'free')->count();
            $totalRecluiters = User::where('role_id', 4)->count();
            $totalCandidates = User::where('role_id', 5)->count();
            $subscriptionCounts = User::select('subscription_type', DB::raw('count(*) as total'))
                ->groupBy('subscription_type')
                ->orderBy('total', 'desc')
                ->first();
            $mostPopularPlan = $subscriptionCounts ? $subscriptionCounts->subscription_type : null;
            $subscriptionConversionRate = $this->calculateSubscriptionConversionRate();
            return view('profile.show', compact('user', 'totalSubscribers', 'freeUsers', 'mostPopularPlan', 'totalRecluiters','totalCandidates', 'subscriptionConversionRate'));
        }
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
