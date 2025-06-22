<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'title' => 'required',
            'developer' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'published_year' => 'required',
            'price' => 'required',
        ]);

        // Uploading the image and storing it. It fucking WORKS
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images/games'), $filename);
            $incomingFields['image'] = $filename;
        }

        Game::create($incomingFields);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        $user = Auth::user();
        $imageData = Game::all();
        return view('/dashboard', [
            'user' => $user,
            'imageData' => $imageData,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
