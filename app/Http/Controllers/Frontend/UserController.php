<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
       $users=User::select('id', 'name', 'email', 'phone', 'created_at')->get();
       return view('frontend.users.users', compact('users'));
   }
}
