<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planets')->get();
        return $planets;
    }

    public function show($planet)
    {
        $planet = DB::table('planets')->where('id', $planet)->first();

        if (!$planet) {
            abort(404, 'Planet not found');
        }

        return $planet;
    }
}
