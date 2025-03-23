<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        return view('auth.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'telephone' => 'nullable|string|max:30',
            'pictureURL' => '|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'username' => 'nullable|string|max:30'
        ]);

        $imagePath = $request->file('pictureURL')->store('users', 'public');

        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone_no = $request->telephone;
        $user->profile_picture = $imagePath;
        $user->username = $request->username;

        $user->save();

        return redirect()->route('edit', ['user' => $user->id])->with('success', 'Profile updated successfully');
    }
}
