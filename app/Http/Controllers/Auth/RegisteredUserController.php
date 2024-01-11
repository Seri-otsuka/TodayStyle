<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

use App\Models\areas;
use App\Models\areas_finely;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        //全件渡すregisterにareasテーブルにデータを
        $areas = Area::all();
        
        return view('auth.register')
            ->with([
                'areas' => $areas,
                'areas_finely' => $areas_finely,
            ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $areas = areas::all();
        $areas_finely =areas_finely::all();
        
        //バリデーション
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed','digits_between:8,12','alpha_num', Rules\Password::defaults()],
            //一応半角英数字のヴァリデーション入れてるけど、もともと半角英数字でしか入力できないようになってる。
            
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'area_id' => $request->area,
            'temperature' => $request->temperature,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME) 
            ->with([
                'areas' => $areas,
                'areas_finely' => $areas_finely,
            ]);
    }
}
