<?php

namespace App\Http\Controllers;

use App\Models\Assos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $associations = Assos::where('user_id', Auth::user()->id)->get();

        return view('dashboard.associations', [
            'associations' => $associations,
        ]);
    }

    public function assosAdd()
    {
        return view('dashboard.associationAdd', [
        ]);
    }

    public function assosStore(Request $request)
    {
        $assos = new Assos();

        $assos->title = $request->title;
        $assos->description = $request->description;
        // $assos->hashtags = $request->hashtags;

        // if ($request->input('hashtags') > 1) {

 
        //         $res = implode(",", $request->input('hashtags'));


        //     $assos->hashtags = $res;

        // } else {
            $assos->hashtags = json_encode($request->input('hashtags'));
        // }
        if ($request->hasFile('image')) {

                $file = $request->file('image');
                $extension = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move(public_path() . '/uploads/assos/', $filename);


                $assos->logo = $filename;
    


        } else {
            $assos->logo= "";

        }


        $assos->budget = $request->budget;

        $assos->user_id = Auth::user()->id;

        $assos->save();


        return redirect()->route('dashboard.assos')->with('success', 'L association a bien été créée.');


    }

    public function assosDelete($id)
    {
        if ($association = Assos::find($id)) {
            
            $association->delete();

        }


        return redirect()->route('dashboard.assos')->with('success', 'L association a bien été supprimé.');
    }

}
