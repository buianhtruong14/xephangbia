<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(UserRequest $request){
        $hashPass = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashPass
        ]);
        return redirect()->route('user.index');
    }
    public function edit(User $user){
        return view('admin.user.edit', compact('user'));
    }
    public function update(User $user, UserRequest $request){
        if($request->password === $user->password){
            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }
        else{
            $hashPass = Hash::make($request->password);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $hashPass
            ]);
        }
        return redirect()->route('user.index');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index');
    }
}
