<?php

namespace App\Http\Controllers;

use App\Models\admin_model;
use Illuminate\Http\Request;

class adminPannel_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $user=admin_model::find($id);
        $userName=$user->userName;

        return view('layout.adminPannelLayout',['userName'=>$userName]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
