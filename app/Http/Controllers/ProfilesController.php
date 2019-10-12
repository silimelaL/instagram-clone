<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        //$user=find()
        $user=User::findOrFail($user);
        return view('home',compact('user'));
    }
}
