<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtectedController extends Controller
{
    public function protectedRoute(Request $request) {
        return [
            'user' => $request->user(),
            'message' => 'This is a protected route'
        ];
    }
}
