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
        $users = User::where('role','user')->orderBy('id', 'desc')->paginate(30);
       // dd($users);
        return view('admin.user.index',['users' => $users]);
    }

    public function edit($id)
    {
        # code...
        $edit = User::find($id);
        return view('admin.user.edit', ['edit' => $edit]);
    }

    public function update(Request $request, $id)
    {
        # code...
        $user = User::find($id);
        $user->balance = $request->balance;
        $user->save();
        return redirect()->route('user.list')->with('success', 'Data updated successfully!');
    }


    public function delete($id)
    {
        # code...
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Data deleted successfully!');
    }
    //approve

    public function free($id)
    {
        # code...
        $user = User::find($id);
        $user->free = 1;
        $user->save();
         return redirect()->back()->with('success',  'data updated successfully!');
    }

    public function paid($id)
    {
        # code...
        $user = User::find($id);
        $user->paid = 1;
        $user->save();
         return redirect()->back()->with('success',  'data updated successfully!');
    }

    public function multiple($id)
    {
        # code...
        $user = User::find($id);
        $user->multi = 1;
        $user->save();
         return redirect()->back()->with('success',  'data updated successfully!');
    }


    //deny

    public function free_neg($id)
    {
        # code...
        $user = User::find($id);
        $user->free = 0;
        $user->save();
         return redirect()->back()->with('success',  'data updated successfully!');
    }

    public function paid_neg($id)
    {
        # code...
        $user = User::find($id);
        $user->paid = 0;
        $user->save();
         return redirect()->back()->with('success',  'data updated successfully!');
    }

    public function multiple_neg($id)
    {
        # code...
        $user = User::find($id);
        $user->multi = 0;
        $user->save();
         return redirect()->back()->with('success',  'data updated successfully!');
    }
}
