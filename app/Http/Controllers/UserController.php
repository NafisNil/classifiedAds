<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
class UserController extends Controller
{
    //
    public function signup(UserRequest $request)
    {
        # code...

            $user = new User;
            $user->name  = $request->first_name.' '.$request->last_name;
            $user->email  = $request->email;
            
            $user->password  = bcrypt($request->password);
           
          
            $user->role = 'user';
           
            $user->save();
            return view('frontend.login')->with('success','Registration completed successfully! Please login..');
    }

    public function login(LoginRequest $request)
    {
        # code...
        //dd($request);
        $email = $request->email;
        $password = $request->password;
        $validData = User::where('email',$email)->first();
        $password_check  =password_verify($password, $validData->password);
        if($validData == false){
           
            return redirect()->back()->with('message','Email pr Password is not valid!');
        }
        
        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            # code...
            if ($validData->role == "user") {
                # code...
                return redirect()->route('user.dashboard');
            }
           
        }
       
    }

    public function dashboard()
    {
        # code...
        return view("frontend.dashboard");
    }

    public function userlist()
    {
        # code...
        $users = User::orderBy('id', 'desc')->paginate(30);
        return view('admin.user.index',['users' => $users]);
    }


    public function delete($id)
    {
        # code...
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Data deleted successfully!');
    }



}
