<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $title = 'Users';
        $users = User::orderBy('created_at', 'desc')->paginate();
        return view('users.index', compact('title', 'users'));
    }

    public function create()
    {
        $title = 'Create User';
        return view('users.create', compact('title'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|alpha_num:ascii|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits_between:10,13',
//            'status' => 'required',
            'password' => 'required|confirmed',
        ]);

        $validated['password'] = bcrypt($request->password);

        if (auth()->user()->role == 'super admin') {
            $validated['role'] = 'admin';
        } elseif (auth()->user()->role == 'admin') {
            $validated['role'] = 'manager';
        } else {
            $validated['role'] = 'editor';
        }

        $user = new User();
        $user->fill($validated);
        $user->save();
//        dd($user->toArray());
        return redirect()->route('users')->with('status', 'New User has been created successfully');
    }

    public function edit(User $user)
    {
        $title = 'Edit User';
        return view('users.edit', compact('title', 'user'));
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|alpha_num:ascii|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|digits_between:10,13',
//            'status' => 'required',
//            'password' => 'nullable|confirmed',
        ]);

        if ($request->has('password') && $request->password != '') {
            $validated['password'] = bcrypt($request->password);
        } else {
            unset($validated['password']);
        }

        $user->fill($validated);
        $user->save();
//        dd($user->toArray());
        return redirect()->route('users')->with('status', 'User has been updated successfully');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->back()->with('status', 'User has been deleted successfully');
    }


}
