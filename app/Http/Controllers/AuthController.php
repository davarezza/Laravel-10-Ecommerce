<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() {
        return view('auth/register', [
            'active' => 'register'
        ]);
    }

    public function login() {
        return view('auth/login', [
            'active' => 'login'
        ]);
    }
}
