<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    /**     * Display the admin registration view.
     */    
    public function createAdmin(): View
    {        
        return view('auth.register_admin');
    }
    /**     
     * Handle admin registration.
     *     
     * @throws \Illuminate\Validation\ValidationException
     */    
    public function storeAdmin(Request $request): RedirectResponse
    {      
        $request->validate([
            'name' => ['required', 'string', 'max:255'],            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()], 
            'type' => ['required', 'string'],       
        ]);
        $admin = Admin::create([
            'name' => $request->name,            
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'type' => $request->usertype        
        ]);

        event(new Registered($admin));
        Auth::login($admin);
        return redirect(RouteServiceProvider::HOME);    
    }
}
