<?php

namespace App\Http\Controllers;

use App\Models\AccountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:10',
        ]);

        $user = new AccountModel();
        $user->Names = $request->names;
        $user->Email = $request->email;
        $user->Password =$request->password; 

        $result = $user->save();

        if ($result) {
            return redirect('login');
        } else {
            return redirect('User');
        }
    }
    public function login(Request $request){
        $request->validate([
            'names'=>'required',
            'password'=>'required|min:5|max:10',
        ]);
        $log=AccountModel::where('Names','=',$request->names)->first();
if($log){
    if($request->password == $log->Password){
        session()->put('wisedom',$log->Names);
        return redirect('Dashboard');
    }else{
        return redirect('login')->with('fail','Username or password incorect');

    }
}else{
    return redirect('login')->with('fail','Invalid ');
}
    
    }
    public function loginshow(){
    return view('login');
}


public function logout()
{
    Session::flush(); // clears all session data
    return redirect('login')->with('success', 'Logged out successfully.');
}

}
