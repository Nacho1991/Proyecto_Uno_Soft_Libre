<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{

    public function index()
    {
        $artist = Artist::all();
        return view('artist.index',compact('artist'));
    }


    public function create()
    {
        return view('artist.create');
    }

    public function store(Request $request)
    {
        Artist::create($request->all());
        return redirect('articles');
    }

    public function show($id)
    {
        $artist=Artist::find($id);
        if(is_null($artist)){
            abort(404);
        }
        return view('artist.show',compact('artist'));
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
