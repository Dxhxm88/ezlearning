<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if ($this->checkUser($request->email) == 1) {
            if (Auth::guard('student')->attempt($credentials)) {
                return redirect()->route('student.home');
            }
        }

        if (Auth::attempt($credentials)) {
            return redirect()->route('homepage');
        }

        return redirect(route('signin'));
    }

    public function studentlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->intended(route('student.home'));
        }

        return redirect(route('signin'));
    }

    public function checkUser($email)
    {
        return Student::where('email', $email)->count();
    }
}
