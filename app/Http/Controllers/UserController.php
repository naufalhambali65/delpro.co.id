<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Change Password';
        $newMessage = Message::where('status', 0)->count();
        return view('admin.changePassword.index', compact('title', 'newMessage'));
    }

    public function changePass(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:8|max:255',
            'new_password' => 'required|min:8|max:255|confirmed',
        ]);

        $user = User::find(Auth::id());

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'The current password you entered is incorrect.');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('admin')->with('success', 'Password updated successfully.');
    }

}
