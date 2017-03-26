<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;

class UserController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "/user/userDashboard";

    public function __construct(){
        $this->middleware('userLoginMiddleware', ['except' => 'logout']);
    }

    public function showLoginForm(){
        return view('userLogin');
    }

    public function username(){
        return "emailId";
    }

    public function logout(Request $request){

        $this->guard()->logout();
    //    $request->session()->flush('user');
        $request->session()->forget('user');
        $request->session()->regenerate();
        return redirect('/user');
    }

    protected function guard(){
        return Auth::guard('user');
    }
}
