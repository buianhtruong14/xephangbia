<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }
    public function register(Request $request){
        $request->merge(['password' => Hash::make($request->password)]);
        try{
            $user = User::create($request->all());
            Auth::login($user);
        }catch(\Throwable $th){
            dd($th);
        }
        return redirect()->route('dashboard');
    }
}
