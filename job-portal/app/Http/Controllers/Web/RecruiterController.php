<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\UserPostFeed;

class RecruiterController extends Controller
{
    public function index()
    {
        if(Auth::user()) 
        {
        	$postfeed=UserPostFeed::leftJoin('users', 'userpostfeed.userid', '=', 'users.id') ->select(
                'userpostfeed.*',
                'users.*')->where('userpostfeed.userid' , Auth::user()->id)->orderBy('userpostfeed.id','DESC')->get();
        	$postfeeddata=json_decode($postfeed);
            return view('web.template.CRM.recruiter.recruiter',compact('postfeeddata'));
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

	    public function addpostFeed(Request $request)
	    {
	    		$post = UserPostFeed::create([
	    			'userid' => Auth::user()->id,
	    			'description' => $request->description,
	    			'hashtag' => $request->hashtage,
	    		]);
	    		if($post)
	    		{
	    			return redirect()->route('web.recruiter.index')->with(['success' => 'Post Added Successfully!']);
	    		}
	    }

    
}
