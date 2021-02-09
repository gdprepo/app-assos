<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Assos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function assosPost()
    {
        $associations = Assos::where('user_id', Auth::user()->id)->get();

        return view('dashboard.postsAssos', [
            'associations' => $associations,
        ]);
    }

    public function assospostList($id)
    {
        $association = Assos::find($id);
        $posts = Post::where('assos_id', $id)->get();

        return view('dashboard.postList', [
            'association' => $association,
            'posts' => $posts,
        ]);
    }

    public function postAdd($id)
    {
        $posts = Post::where('assos_id', $id)->get();

        return view('dashboard.postAdd', [
            'assos_id' => $id,
        ]);

    }

    public function postStore(Request $request, $id)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->description = $request->description;
        // $assos->hashtags = $request->hashtags;

        // if ($request->input('hashtags') > 1) {


        //         $res = implode(",", $request->input('hashtags'));


        //     $assos->hashtags = $res;

        // } else {
        // }
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move(public_path() . '/uploads/posts/', $filename);


            $post->image = $filename;
        } else {
            $post->image = "";
        }

        $post->eventdate = new \Datetime();


        if($request->visible == "true") {
            $post->visible = true;
        } else {
            $post->visible = false;
        }


        $post->type = $request->type;

        $post->assos_id = $id;

        $post->save();


        return redirect()->route('post.list', $id)->with('success', 'L association a bien été créée.');
    

    }

    public function postDelete($id)
    {
        if ($association = Post::find($id)) {

            $association->delete();
        }


        return redirect()->route('assos.posts')->with('success', 'Le post a bien été supprimé.');
    }

    public function assosAdd()
    {
        return view('dashboard.associationAdd', []);
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
            $assos->logo = "";
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
