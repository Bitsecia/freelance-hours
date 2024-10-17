<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function about(Request $request)
    {
        return view('about');
    }

    public function team(Request $request)
    {
        echo "Equipe de desenvolvimento: Alexsandro S. Leite";
    }

    public function teste(Request $request)
    {
        return view('teste.exemplo');
    }
}
