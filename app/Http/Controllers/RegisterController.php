<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
     public function index()
        {
            return view ('register.index',['title'=>'Register','active'=>'register']);
        }

    public function store(Request $request){
        $validatedDData=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $validatedDData['password']=Hash::make($validatedDData['password']);

        User::create($validatedDData);
        // $request->session()->flash('successs','Registrasi Berhasil');
        return redirect('/login')->with('success','Registrasi Berhasil');
    }
}
