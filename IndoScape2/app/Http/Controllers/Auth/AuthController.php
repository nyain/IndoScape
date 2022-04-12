<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{   
    
    public function login(Request $request){
        $user = User::where('email', $request -> email) -> first();
        if ($user) {
            if ($user ['password'] == $request ['password'] && $user ['is_admin'] == true) {
                session() -> put('email',$request['email']);
                return redirect()->action([UserController::class, 'getaAdmin']);
            } elseif ($user ['password'] == $request ['password']) {
                session() -> put('email',$request['email']);
                return redirect()->action([UserController::class, 'getUser']);
            }
            else {
                return redirect()->back()->with('error', 'Email atau Password salah');
            }
        }
    }
}
