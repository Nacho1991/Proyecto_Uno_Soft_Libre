<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Artist;
use DB;
use Auth;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->is_admin) {
                $artists = \App\Artist::paginate(5);
                return view('cantantes.index', compact('artists'));
            }
            return redirect('inicio');
        } else {
            return redirect(url());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::check()) {
            if (Auth::user()->is_admin) {
                return view('cantantes.create');
            }
            return redirect('inicio');
        }else{
            return redirect(url());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        if(Auth::check()) {
            \App\Artist::create(\Input::all());
            return redirect('artists');
        }else{
            return redirect(url());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        if(Auth::check()) {
            $artist = \App\Artist::find($id);
            return view('cantantes.edit', compact('artist'));
        }else{
            return redirect(url());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        if(Auth::check()) {
            $artist = \App\Artist::find($id);
            $name = \Input::get('name');
            $artist->name = $name;
            $artist->save();
            return redirect('artists');
        }else{
            return redirect(url());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
