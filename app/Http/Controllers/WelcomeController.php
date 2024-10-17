<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // BUSCA UM REGISTRO POR id
        // $user = User::find(1);

        // Auth::login($user);
        // Auth::logout($user);

        // INSERE UM NOVO REGISTRO
        // $user = User::query()->create([
        //     'name' => 'Alex',
        //     'email' => 'alex@alex.com.br',
        //     'password' => 'teste123'
        // ]);

        // ATUALIZANDO O REGISTRO CAMPO A CAMPO
        // $user->email_verified_at = now();
        // $user->save();

        // ATUALIZANDO O REGISTRO EM MASSA
        // $user->update(['email_verified_at' => now()->subMonths(10)]);

        // dd($user->email_verified_at->diffForHumans());

        return view('welcome');

    }
}
