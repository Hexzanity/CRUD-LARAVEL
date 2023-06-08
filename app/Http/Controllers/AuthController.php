<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function logout()
    {
        return redirect('signin/sign-in.php');
    }
}
