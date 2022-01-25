<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function listusers(){
        $users=User::all();
        return response(['users' => $users], 200);
    }
}