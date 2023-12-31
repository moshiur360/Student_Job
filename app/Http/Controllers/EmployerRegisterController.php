<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Hash;
use Illuminate\Http\Request;

class EmployerRegisterController extends Controller
{

    public function employerRegister(Request $request)
    {
        $this->validate($request, [
            'cname' => 'required|string|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed',
        ]);

        $user = User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type'),
        ]);

        Company::create([
            'user_id' => $user->id,
            'cname' => request('cname'),
            'slug' => str_slug(request('cname')),
        ]);
        $user->sendEmailVerificationNotification();
        return redirect()->back()->with('message', 'Please verify your email by clicking the link sent to you email address');
    }
}
