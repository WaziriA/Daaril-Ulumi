<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;

use session;

class AuthController extends Controller
{
    public function showRegistrationForm(){
        return view('Auth.register');
    }
    
    public function register(Request $request){
        //validate
        $validated=request()->validate(
            [
            'name'=> 'required|min:3|max:40',
            'email'=>'required|email|unique:users,email',
            'physical_address'=> 'required',
            'phone_no'=> 'required',
            'date_of_birth' => 'nullable',
            'status'=>'required|in:class1,class2',
            'image'=> 'nullable|mimes:jpg,png,jpeg|max:2048',
            'password'=>'required|min:8',
        //    'role' => 'required|in:admin,teacher,student',
            ]
        );


         // Handle file upload
         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); 
            $fileName = time() . '.' . $extension;
            $path = 'upload/images/';
            $file->move($path, $fileName);
        } else {
            $fileName = null;
        }
           
        //create user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'physical_address' => $validated['physical_address'],
            'phone_no' => $validated['phone_no'],
            'date_of_birth' => $validated['date_of_birth'],
            'status' => $validated['status'],
            'image' => $path . $fileName, // Adjust if storing full path or just filename
            'password' => Hash::make($validated['password']),
            // Associate a role using the model relationship
           
        ]);
        
   

    $role = 'student';

        //redirect
      // Redirect to the home route
       return redirect()->route('login')->with('success', 'Account created successfully!');

    }


    //For login

    public function login(){
        return view('Auth.login');
    }

    public function authenticate(){
        $validated=request()->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);


        if(auth()->attempt($validated)){
          
            request()->session()->regenerate();
          
              If(auth()->user()->is_admin == 1 || auth()->user()->is_admin == 2 ){
                return redirect()->route('admin.dashboard')->with('success', 'you logged in as a Administrator');
              }
              
              else{
                return redirect()->route('student.dashboard')->with('success', 'you logged in as a student');
              }
        }

        return redirect()->route('login')->with('error', 'No user Found with these Credential');
            
        
    }

    public function logout(){
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
