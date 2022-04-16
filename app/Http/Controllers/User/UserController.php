<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(){
        if (session() -> get('email') != null) {
            $user = User::all();
            return view('home',['user'=>$user]);
        } else {
            return redirect('/');
        }
    }

    public function getTableUser(){
        $user = User::all();
        return view('tableuser',['user'=>$user]);
    }

    public function getaAdmin(){
        $user = User::all();
        return view('dashboard',['user'=>$user]);
    }

    public function addUser(Request $request){
        if($request ['is_admin'] == null){
            $request['is_admin'] = 0;
        }
        $user = User::create($request -> toArray());
        return redirect()->action([UserController::class, 'getUser']);
        // error_log('masuk bjir');
        // return response($request -> all(),200);
    }

    public function updateUser(Request $request){
        $user = User::where('id', $request -> id) -> first();
        
        $user ['name'] = $request['name'];
        $user ['password'] = $request['password'];
        $user -> save();
        return redirect()->action([UserController::class, 'getUser']);
        // error_log('masuk bjir');
        
    }

    public function deleteUser(Request $request){
        $user = User::where('id', $request -> id) -> first();
        $user -> delete();
        return redirect()->action([UserController::class, 'getUser']);
    }
}
