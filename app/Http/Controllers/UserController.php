<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index() {
       
        $userData = User::all();
        
        return view("user", ['userList'=>$userData]);
     
     }
     
     public function show($id) {
        echo 'show';
     }
    
}
