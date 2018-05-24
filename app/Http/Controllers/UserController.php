<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    
    public function index(User $user){
        $user = Auth::User();

        return view('/user', compact('user'));
    }
}
