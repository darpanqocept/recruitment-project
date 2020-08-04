<?php

namespace App\Http\Controllers\Web;

use App\Models\JobSeekerPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobseekerController extends Controller
{
    public function index()
    {
        $aPost = JobSeekerPost::orderBy('id', 'DESC')->get();
        /*dd($aPost); exit();*/
        if(Auth::user()) {
            return view('web.template.CRM.job.job-seeker',compact('aPost'));
        }else{
            return redirect()->route('web.home.loginDisplay');
        }

    }

    public function profilePage()
    {
        return view('web.template.CRM.job.profile');
    }

    public function profileView()
    {
        return view('web.template.CRM.job.view-profile');
    }

    public function myJob()
    {
        return view('web.template.CRM.job.my-job');
    }

    public function searchJob()
    {
        return view('web.template.CRM.job.search');
    }

    public function postFeed(Request $request)
    {
        //dd($request->all()); exit();
        $post = JobSeekerPost::create([
            'post'=>$request->post,
            'user_id'=>Auth::user()->id,
            'tags'=>$request->tags
        ]);
        if($post)
        {
            return view('web.template.CRM.job.job-seeker');
        }

    }
}
