<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "/admin/adminDashboard";

    public function __construct(){
        $this->middleware('adminLoginMiddleware', ['except' => 'logout']);
    }

    public function showLoginForm(){
        return view('adminLogin');
    }

    public function username(){
        return "emailId";
    }

    public function logout(Request $request){

        $this->guard()->logout();
        //$request->session()->flush('admin');
        $request->session()->forget('admin');
        $request->session()->regenerate();
        return redirect('/admin');
    }

    protected function guard(){
        return Auth::guard('admin');
    }
}
