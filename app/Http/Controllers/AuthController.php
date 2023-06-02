<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin01') {
            // Login successful
            return redirect('/charts');
        }

        return redirect('/')->with('error', 'Invalid username or password.');
    }

    public function logout()
    {
        // Perform logout logic here, such as clearing the authenticated user's session or token

        // Redirect to the login page after logout
        return redirect('/');
    }
}
