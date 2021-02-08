<?php

namespace App\Http\Controllers;

use App\Models\Assos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $associations = Assos::all();

        return view('welcome', [
            'associations' => $associations,
        ]);
    }
}
