<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\UserPostFeed;
use App\Models\UserPostfeedlike;
use App\Models\UserPostfeedcomment;
use App\Models\PostJobadd;
use File;
use DB;


class RecruiterController extends Controller
{
    public function index()
    {
        if(Auth::user()) 
        {
        	$postfeed=UserPostFeed::with('comments','comments.user','likes')->leftJoin('users', 'userpostfeed.user_id', '=', 'users.id')        	 
        	 ->select(
                'userpostfeed.*',
                'users.first_name',
                 'users.last_name'
               )->orderBy('userpostfeed.id','DESC')->get();
        	$postfeeddata=json_decode($postfeed);

           
         //echo "<pre>";echo print_r($postfeeddata); echo "</pre>";die();


            return view('web.template.CRM.recruiter.recruiter',compact('postfeeddata'));
        }
        else
        {
            return redirect()->route('web.home.loginDisplay');
        }
    }

    public function likepostFeed($id)
    {
    	 if(Auth::user()) 
        {
        		 $selectlike = UserPostfeedlike::select('user_post_feed_id','user_id')->where(['user_id'=>Auth::user()->id,'user_post_feed_id'=>$id])->get();

                  $countlike=count($selectlike);

                  if($countlike>0){ 
                  }
                  else {
                     $inserlike = UserPostfeedlike::create([
                        'user_id' => Auth::user()->id,
                         'user_post_feed_id' => $id,                                     
                    ]); 

                    } 

                     return back();
        }

    }

     public function commentpostFeed($id , Request $request)
    {
    	 if(Auth::user()) 
        {        		 
             $insercomment = UserPostfeedcomment::create([
                 'user_id' => Auth::user()->id,
                 'user_post_feed_id' => $id,
                 'comment' => $request->ucmt,                                   
            ]); 

           if($insercomment) {
            return redirect()->route('web.recruiter.index')->with(['toastr' => ['success' => 'Comment Add Successfully!']]);
           }
        }

    }

            public function postjobdata(Request $request)
            {
                if(Auth::user()) 
                {

                   $inserpost = PostJobadd::create([
                         'user_id' => Auth::user()->id,
                         'title' => $request->job_title,               
                         'experience' => $request->job_exper,
                         'sallary' => $request->sallary,
                         'no_of_pos' => $request->no_of_pos,
                         'qualification' => $request->qualification,
                         'domain' => $request->domain,
                         'shift' => $request->shift,
                         'functional_area' => $request->functional,
                         'skills' => $request->skillss,
                         'genders' => $request->gender,
                         'interview_type' => $request->interview_type,
                         'job_summary' => $request->job_summary,
                         'job_description' => $request->job_desc,                 
                         'search_string' => $request->search_string,
                         'tag_group' => $request->tag_group,
                         'contact_no' => $request->contact_no,
                         'email' => $request->email,
                         'add_other_recruiter' => $request->other_rec,
                         'company_name' => $request->company_name,
                         'no_of_emp' => $request->num_emp,
                         'location' => $request->location,
                         'website_link' => $request->Website_link,
                         'company_email' => $request->cmp_email,
                         'company_domain' => $request->cmp_domain,
                         'company_description' => $request->cmp_desc,
                         'questions'  => $request->q1.','.$request->q2.','.$request->q3.','.$request->q4.','.$request->q4,                                 
                    ]); 
                   if($inserpost) {
                    return redirect()->route('web.recruiter.index')->with(['toastr' => ['success' => 'Post created successfully!']]);
                   }

                } 
                 
            }

           public function editjobdata($id,Request $request)
           {
                 if(Auth::user()) 
                {
                    $selectpostjson = PostJobadd::select("*")->where('id',$id)->get();
                 
                        $selectpost = json_decode($selectpostjson);
                        $countpost = count($selectpost);
                       //echo $countpost; die();
                        if($countpost == 0)
                        {
                            return redirect()->route('web.recruiter.my-job')->with(['toastr' => ['error' => 'No Post id available!']]);
                        }
                        else {

                            
                            return view('web.template.CRM.recruiter.editjob',compact('selectpost'));
                        }
                }
           }

           public function editpostdata($id,Request $request)
           {
                    if(Auth::user()) 
                    {
                         $data = [

                            'title' => $request->job_title,               
                             'experience' => $request->job_exper,
                             'sallary' => $request->sallary,
                             'no_of_pos' => $request->no_of_pos,
                             'qualification' => $request->qualification,
                             'domain' => $request->domain,
                             'shift' => $request->shift,
                             'functional_area' => $request->functional,
                             'skills' => $request->skillss,
                             'genders' => $request->gender,
                             'interview_type' => $request->interview_type,
                             'job_summary' => $request->job_summary,
                             'job_description' => $request->job_desc,                 
                             'search_string' => $request->search_string,
                             'tag_group' => $request->tag_group,
                             'contact_no' => $request->contact_no,
                             'email' => $request->email,
                             'add_other_recruiter' => $request->other_rec,
                             'company_name' => $request->company_name,
                             'no_of_emp' => $request->num_emp,
                             'location' => $request->location,
                             'website_link' => $request->Website_link,
                             'company_email' => $request->cmp_email,
                             'company_domain' => $request->cmp_domain,
                             'company_description' => $request->cmp_desc,
                             'questions'  => $request->q1.','.$request->q2.','.$request->q3.','.$request->q4.','.$request->q4,

                         ];

                $postData = PostJobadd::where('id', $id)->update($data);
                    if($postData)
                    {
                        return redirect()->route('web.recruiter.my-job')->with(['toastr' => ['success' => 'Update Post  successfully!']]);
                    }
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
          if(Auth::user()) 
         {

           $selectpostjson = PostJobadd::select("*")->where('user_id',Auth::user()->id)->get();
           $selectpost = json_decode($selectpostjson);
	        return view('web.template.CRM.recruiter.my-job',compact('selectpost'));
        }
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
	    	 $feedimage = NULL;
	    	 if ($request->feedimage != '') { 
                $path = public_path('uploads/postfeed/');
                if (!File::exists($path)) {
                    File::makeDirectory($path, $mode = 0777, true, true);
                }
                $feedimage = $request->feedimage;
                $fileName = $feedimage->getClientOriginalName();
                $storeName1 = time() ."_". $fileName;
                $storeName= str_replace(' ', '', $storeName1);
                $feedimage->move($path, $storeName);
                $feedimage = "postfeed/".$storeName;
            }
	    		$post = UserPostFeed::create([
	    			'user_id' => Auth::user()->id,
	    			'description' => $request->description,
	    			'hashtag' => $request->hashtage,
	    			'image' =>  $feedimage,
	    		]);
	    		if($post)
	    		{
	    			return redirect()->route('web.recruiter.index')->with(['success' => 'Post Added Successfully!']);
	    		}
	    }

    
}
