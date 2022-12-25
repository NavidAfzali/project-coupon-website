<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        if (! Gate::allows('isAdmin')) {
            abort(403);
        }
        $users = User::all();
        return view('user-list')->with(['users' => $users]);
    }

    public function deleteUser(Request $request)
    {
        User::destroy($request->id);
        return view('success');
    }

    public function editUser(Request $request)
    {
        $user = User::find((int)$request->id);
        return view('user-edit-by-admin')->with(['user' => $user]);
    }

    public function edition(Request $request)
    {
        User::where('id', (int)$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return view('success');
    }

    public function couponList(Request $request)
    {
        $user = User::find($request->id);
        return view('coupon-list')->with(['user' => $user]);
    }
}
