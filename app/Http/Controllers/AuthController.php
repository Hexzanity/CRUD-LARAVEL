<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function logout()
    {
        // Perform logout logic here, such as clearing the authenticated user's session or token

        // Redirect to the signin/sign-in.php page after logout
        return redirect('signin/sign-in.php');
    }
}
