<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function auth(Request $request)
    {
        if (!$request->email || !$request->password) return back()->with('fail', "Pastikan Mengisi Email Dan Password");

        $user = User::where('email', $request->email)->get()->first();
        if (!$user) return back()->with('fail', "User Tidak Terdaftar");
        if (!password_verify($request->password, $user->password)) return  back()->with('fail', "Password Salah");

        $payload = [
            "name" => $user->name,
            "role" => $user->role
        ];

        return redirect('dashboard')->withCookie(cookie('user_token', json_encode($payload)));
    }
}
