<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RecruiterController extends Controller
{
    public function index()
    {
        if(Auth::user()) {
            return view('web.template.CRM.recruiter.recruiter');
            }
        else{
            return redirect()->route('web.home.loginDisplay');
        }

    }
}
