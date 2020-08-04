<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    public function index()
    {
        if(Auth::user()) {
            return view('web.template.CRM.freelancer.freelancer');
        }else{
            return redirect()->route('web.home.loginDisplay');
        }
    }

    public function networkPage()
    {
        return view('web.template.CRM.freelancer.network');
    }

    public function profilePage()
    {
        return view('web.template.CRM.freelancer.profile');
    }

    public function profileView()
    {
        return view('web.template.CRM.freelancer.view-profile');
    }

    public function myJob()
    {
        return view('web.template.CRM.freelancer.my-job');
    }

    public function allCandidates()
    {
        return view('web.template.CRM.freelancer.candidate');
    }

    public function myProjects()
    {
        return view('web.template.CRM.freelancer.project');
    }
}
