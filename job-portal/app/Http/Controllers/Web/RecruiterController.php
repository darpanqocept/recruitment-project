<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RecruiterController extends Controller
{
    public function index()
    {
        if(Auth::user()) 
        {
            return view('web.template.CRM.recruiter.recruiter');
        }
        else
        {
            return redirect()->route('web.home.loginDisplay');
        }
    }

        public function networkPage()
	    {
	        return view('web.template.CRM.recruiter.network');
	    }

	    public function profilePage()
	    {
	        return view('web.template.CRM.recruiter.profile');
	    }

	    public function profileView()
	    {
	        return view('web.template.CRM.recruiter.view-profile');
	    }

	    public function myJob()
	    {
	        return view('web.template.CRM.recruiter.my-job');
	    }

	    public function allCandidates()
	    {
	        return view('web.template.CRM.recruiter.candidate');
	    }

	    public function myProjects()
	    {
	        return view('web.template.CRM.recruiter.project');
	    }

    
}
