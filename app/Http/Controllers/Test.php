<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Test extends Controller
{
    public function index(){
        echo Hash::make('2209');
    }
}
