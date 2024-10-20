<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'second_name' => ['string', 'max:50'],
            'first_lastname' => ['required', 'string', 'max:50'],
            'second_lastname' => ['string', 'max:50'],
            'idtype' => ['required', 'string', 'max:4'],
            'occupation' => ['required', 'string', 'max:50'],
            'birth' => ['required', 'date'],
            'inday' => ['required', 'date'],
            'telephone' => ['required', 'string', 'max:15'],
            'address' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'id' => $request->id,
            'first_name' => $request->first_name,
            'second_name' => $request->second_name,
            'first_lastname' => $request->first_lastname,
            'second_lastname' => $request->second_lastname,
            'idtype' => $request->idtype,
            'occupation' => $request->occupation,
            'telephone' => $request->telephone,
            'address' => $request->address,
            'birth' => $request->birth,
            'inday' => $request->inday,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
