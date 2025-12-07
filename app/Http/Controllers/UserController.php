<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        return view('home');
    }
    public function index(Request $request){
        return view('home');
    }
    public function register(Request $request)
    {
        return view('home');
    }
}
