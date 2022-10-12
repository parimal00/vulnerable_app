<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return view('user.index');
    }

    public function store(UserStoreRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:filter|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        User::create($request->all());

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
