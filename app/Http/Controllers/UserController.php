<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function index()
    {
        # code...
        $user = Users::get();
        return view('adminUser', ['dataUser' => $user]);
    }
}
