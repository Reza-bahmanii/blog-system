<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return view('admin/dashboard');
    }

    public function users()
    {
        $users = User::orderby('id', 'asc')->get();
        return view('admin/user/users', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin/user/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validateUser = $request->validate([
            'name' => ['required' , 'min:3', 'max:255'],
            'email' => ['required' , 'unique:users,email,' . $id],
            'role' => ['required']
        ]);

        $user->update($validateUser);

        return redirect()->route('dashboard.users');

    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('dashboard.users');
    }
}
