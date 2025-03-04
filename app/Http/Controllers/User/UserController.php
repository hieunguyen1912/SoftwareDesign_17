<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    public function dashboard() {
        return view('user.dashboard');
    }

    public function logout() {
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('status', 'You have been logged out!');
    }

    public function profile() {
        return view('user.profile');
    }

    public function profile_submit(Request $request) {
        $user = User::where('id', Auth::guard('web')->user()->id)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'zip' => 'required',
        ]);

        if($request->photo) {
            $request->validate([
                'photo' => 'image|mimes:jpeg,jpg,png,gif|max:2048',
            ]);
            $photo = $request->photo;
            $photo_name = 'user_'.time().'_'.$photo->extension();
            $photo->move(public_path().'/uploads', $photo_name);
            $user->photo = $photo_name;
        }

        if($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);
            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->zip = $request->zip;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}

