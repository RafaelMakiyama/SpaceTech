<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function profile(){
        $user = User::usuarioLogado();
        $documents = Documents::get();
        return view('user.profile', compact('user', 'documents'));
    }
    
}
