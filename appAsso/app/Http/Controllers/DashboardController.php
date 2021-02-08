<?php

namespace App\Http\Controllers;

use App\Models\Assos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $associations = Assos::all();

        return view('dashboard.index', [
            'associations' => $associations,
        ]);
    }

    public function assos()
    {
        $associations = Assos::all();

        return view('dashboard.associations', [
            'associations' => $associations,
        ]);
    }

    public function assosDelete($id)
    {
        // $associations = Assos::find($id);

        return redirect()->route('dashboard.associations')->with('success', 'L association a bien été supprimé.');
    }
}
