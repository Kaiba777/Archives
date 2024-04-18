<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConnectionRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function connexion() {
        return view('auth.connection');
    }

    public function sauvegarde(ConnectionRequest $request) {
        $connection = $request->validated();
        if (Auth::attempt($connection)) {
            $request->session()->regenerate();
            return redirect()->route('archives.index')->with([
                'success' => 'Vous êtes connecter'
            ]);
        }
        return to_route('auth.connexion')->withErrors([
            'name' => 'Vous êtes tromper'
        ]);
    }

    public function deconnection() {
        Auth::logout();
        return to_route('auth.connexion');
    }
}
