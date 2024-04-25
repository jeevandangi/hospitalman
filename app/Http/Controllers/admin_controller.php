<?php

namespace App\Http\Controllers;

use App\Models\admin_model;
use Illuminate\Http\Request;
class admin_controller extends Controller
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
        $validate=$request->validate([
            'userName'=>'required',
            'password'=>'required',
        ]);
        $userName=$request->input('userName');
        $password=$request->input('password');
        $user = admin_model::where('userName', $userName)->first();
      
       if($user){
        if($password==$user->password){
            return redirect()->route('admin',['id'=>$user->id]);
           }
           else{
            return redirect()->back()->with('error','wrong password ');
           }
       }
       else{
        return redirect()->back()->with('error','user not found');
       }

        
        
        if(!$validate){
    

                return redirect()->back()->with('error',);
        }
       
         
         
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
