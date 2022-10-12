<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoguinController extends Controller
{
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);
        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()
            ->intended('')
            ->with('status', 'Ya estas Logueado');
        }
        return redirect('login');
    }

    public function logout(Request $request, Redirector $redirect)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to('')->with('status', 'Ya estas Deslogueado.!!');
    }
}
