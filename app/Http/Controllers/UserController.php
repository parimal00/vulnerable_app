<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create()
    {
        return view('user.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:filter|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        User::create($request->validated());

        return "success";
    }

    public function update(Request $request)
    {
        User::first()
            ->update([
                'name' => 'jack',
                'isAdmin' => 1
            ]);
    }
}
