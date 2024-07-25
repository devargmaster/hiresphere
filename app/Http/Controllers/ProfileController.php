<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
