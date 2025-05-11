<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        $requestedFields = $request->validate([
            'name' => 'string',
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(['name' => $requestedFields['name'], 'email' => $requestedFields['email'], 'password' => $requestedFields['password']])) {
            $request->session()->regenerate();
        }

        return redirect('/dashboard');
    }

    public function logout() {
        auth()->logout();
        return redirect('/login');
    }
    
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
