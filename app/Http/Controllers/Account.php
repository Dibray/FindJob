<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Account extends Controller
{
    public static function isLogged()
    {
        return view('Account/LogIn');
    }
}
