<?php

namespace App\Http\Controllers\admin;
use App\Models\Page;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class AdminController extends Controller
{
    public function adminHome(){

        if (Auth::check()) {
            $user = Auth::user();
            if ($user->type === 'admin') {
                return view('admin/index' );
            } else {
                return view('admin/login' );
            }
        } else {
            return view('admin/login' );
        }
    }
    public function loginPost(Request $request)
    {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);


        $credentials = $request->only('email', 'password',);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/admin/home');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }
    }
    public function logout()
    {
        Auth::logout();

        // Redirect the user to the desired page after logout
        return redirect('/admin/login');
        // Logic for Logout the user's from website
    }

}
