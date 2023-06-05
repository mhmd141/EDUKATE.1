<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class UserController extends Controller

{
    public function __construct()
    {
        $this->settings = Setting::query()->first();
        view()->share([
            'settings' => $this->settings,
        ]);

    }

    public function login()
    {
        return view('website.login' );
    }


    public function loginPost(Request $request)
    {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }
    }

    public function signup()
    {
        return view('website.signup' );
    }



    public function signupPost(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users'],
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Log in the user
        if($user){
            Auth::login($user);
            return redirect()->intended('/');
        }
        else{
            return redirect()->back()->withErrors(['message' => 'Something went wrong']);
        }
    }


    public function forgetpassword()
    {
        return view('website.forgetpassword' );
    }

    public function forgetpasswordPost(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
        ]);

        $response = Password::sendResetLink($formFields);

        if ($response === Password::RESET_LINK_SENT) {
            return back()->with('status', 'Password reset link sent to your email!');
        } else {
            return back()->withErrors(['email' => trans($response)]);
        }
    }

    public function profile()
    {
        $user = Auth::user();
        return view('website.profile' ,['user'=>$user]);
    }

    public function updateMyProfile(request $request)
    {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'name' => 'required'
        ]);

        $user = Auth::user();

            // Check if the new email conflicts with an existing one
    $existingUser = User::where('email', $request->email)
    ->where('id', '!=', $user->id)
    ->first();

        if ($existingUser) {
            return back()->withErrors(['massage' => 'This email address is already taken.']);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile')->with('status', 'Update Successfully');
        }

    public function editpassword(User $user)
    {
        return view('website.editpassword' );
    }



    public function editpasswordPost(Request $request)
    {
        $formFields = $request->validate([
            'old_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $user = Auth::user();

        // Check if the old password matches the user's current password
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['message' => 'Incorrect old password']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('profile')->with('status', 'Password updated successfully.');
    }


    public function logout()
    {
        Auth::logout();

        // Redirect the user to the desired page after logout
        return redirect('/login');
        // Logic for Logout the user's from website
    }
}
