<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //Login page show
    public function index()
    {
        return view ('login.login');
    }
    //login redirect dashboard

    public function store(Request $request)
    {
            // validate data 
            $request->validate([
                'email' => 'required',
                'password' => 'required|min:8|string'
            ]);
    
            // login code 
            
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect('dashboard');
            }else{
                return back()->with('error', "Your email and password do not match. Please try again.");
      
            }
         
           
    
        
    }

    //Dashboard pade

    public function dashboard()
    {
        return view ('login.dashboard');
        return back()->with('success', 'Welcome To Admin Panel');
    }

    //Logout

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('login')->with('success', 'Admin Logout Succesfully! ');;

        
    }

    //changepassword
    public function changepass()
    {
        return view('login.changepass');
    }

    //Update password 

    public function updatePassword(Request $request)
     
       {
            
            $this->validate($request, [
                'oldpassword' => 'required|string',
                'new_password' => 'required|confirmed|min:8|string'
            ]);
            $auth = Auth::user();
     
     // The passwords matches
            if (!Hash::check($request->get('oldpassword'), $auth->password)) 
            {
                return back()->with('error', "Current Password is Invalid");
            }
     
    // Current password and new password same
            if (strcmp($request->get('oldpassword'), $request->new_password) == 0) 
            {
                return redirect()->back()->with("error", "New Password cannot be same as your current password.");
            }
     
            $user =  User::find($auth->id);
            $user->password =  Hash::make($request->new_password);
            $user->save();
            return back()->with('success', "Password Changed Successfully");
        }
}
