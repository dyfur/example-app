<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class PlanetController extends Controller
{
    //
     private array $planets = [
        'mars' => [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        'venus' => [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        'earth' => [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        'jupiter' => [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    public function index()
    {
        return view('planets', ['planeten' => $this->planets]);
    }

    public function show(string $planet)
    {
        $planet = strtolower($planet);

        if (!array_key_exists($planet, $this->planets)) {
            abort(404, 'Planet not found');
        }

        return view('planet-detail', ['planet' => $this->planets[$planet]]);
    }
}
