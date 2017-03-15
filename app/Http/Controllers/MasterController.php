<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;

class MasterController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "/masterDashboard";

    public function __construct(){
        $this->middleware('masterLoginMiddleware', ['except' => 'logout']);
    }

    public function showLoginForm(){
        return view('masterLogin');
    }

    public function username(){
        return "emailId";
    }

    public function logout(Request $request){

        $this->guard()->logout();
        $request->session()->flush('master');
        $request->session()->regenerate();
        return redirect('/');
    }

    protected function guard(){
        return Auth::guard('master');
    }
}
