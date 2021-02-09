<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Assos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $associations = Assos::all();
        $posts = Post::all();

        return view('welcome', [
            'associations' => $associations,
            'posts' => $posts,

        ]);
    }

    public function assos($id)
    {
        $associations = Assos::all();
        $posts = Post::all();

        return view('welcome', [
            'associations' => $associations,
            'posts' => $posts,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
