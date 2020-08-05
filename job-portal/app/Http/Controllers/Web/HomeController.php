<?php

namespace App\Http\Controllers\Web;

use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.template.home.home');
    }

    public function loginDisplay()
    {
        return view('web.template.register.login');
    }

    public function userRegister(Request $request)
    {
         $this->validate($request,[
            'user_type'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'password'=>'required|same:confirmpass',
            'checked'=>'required'
        ]);
        //dd($request->all()); exit();
        $hashed_password = Hash::make($request->password);
        $result = User::create([
           'user_type'=>$request->user_type,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$hashed_password,
            'confirmpass'=>$hashed_password,
            'checked'=>1
        ]);
        if($result)
        {
            Session::flash('success','Your Data Successful Registered');
            return redirect()->route('web.home.loginDisplay');

        }
        else{
            Session::flash('danger','Your Data Not Registered');
            return redirect()->route('web.home.loginDisplay');
        }
    }

    public function loginUser(Request $request)
    {        
        $email = $request->input('email');
        $password =$request->input('password');
        if (Auth::guard()->attempt((['email' => $email, 'password' => $password])))
        {
            if(Auth::guard()->user()->user_type==1)
            {
                Session::flash('msg','You Redirect On Job Seeker Dashboard');
                return redirect()->route('web.job.index');
            }
            elseif(Auth::guard()->user()->user_type==2)
            {
                Session::flash('msg','You Redirect On Recruiter Dashboard');
               return redirect()->route('web.recruiter.index');
            }
            else
            {
                Session::flash('msg','You Redirect On Freelancer Dashboard');
                return redirect()->route('web.freelancer.index');
            }
            return redirect()->route('web.home.index');
        }
        else
        {
            Session::flash('danger','Please Check Your Credentials');
            return redirect()->route('web.home.loginDisplay');
        }
    }

    public function logoutUser()
    {
            Auth::logout();
            return redirect()->route('web.home.index');
    }
}
