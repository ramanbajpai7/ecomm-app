<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
   public function ragister(Request $request)
    {
        $user= new  User;
        $user->name=$req->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($req->input('password'));
        $user->save();
        return $user;
    }
}
