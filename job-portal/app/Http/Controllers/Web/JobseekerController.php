<?php

namespace App\Http\Controllers\Web;

use App\Models\JobSeekerPersonalInfo;
use App\Models\Rating;
use App\Models\UserPostFeed;
use Session;
use App\Models\JobSeekerPost;
use App\Models\JobSeekerProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JobseekerController extends Controller
{
    public function index()
    {

        /*dd($aPost); exit();*/
        if(Auth::user()) {

            $id= Auth::user()->id;
            $fetch =JobSeekerProfile::where('user_id',$id)->first();
           $array= json_decode($fetch);
            $current_designation = $array['current_designation'];
            $location = $array['location'];
            $industry = $array['industry'];

            $designation = JobSeekerProfile::join('users','job_seeker_profiles.user_id','=','users.id')
               ->where('current_designation',$current_designation)
                ->select('job_seeker_profiles.*')->get();
            $location = JobSeekerProfile::join('users','job_seeker_profiles.user_id','=','users.id')
                ->where('location',$location)
                ->select('job_seeker_profiles.*')->get();
            $industry = JobSeekerProfile::join('users','job_seeker_profiles.user_id','=','users.id')
                ->where('industry',$industry)
                ->select('job_seeker_profiles.*')->get();
            $aUser = JobSeekerProfile::join('users','job_seeker_profiles.user_id','=','users.id')
                                        ->select('job_seeker_profiles.*')->get();
           // dd($aUser); exit();
            $aPost = UserPostFeed::orderBy('id', 'DESC')->get();
            return view('web.template.CRM.job.job-seeker',compact('aPost','aUser','designation','location','industry'));
        }else{
            return redirect()->route('web.home.loginDisplay');
        }

    }

    public function profilePage()
    {
        $id= Auth::user()->id;
        $image = JobSeekerProfile::where('user_id',$id)->get();

        /*$rating = Rating::join('users','ratings.user_id','=','users.id')
                            ->where('ratings.user_id','=',$id)
                            ->select('ratings.*')->first();*/
        return view('web.template.CRM.job.profile',compact('rating','image'));
    }

    public function profileView()
    {
        $id = Auth::user()->id;
        $aPersonal = JobSeekerPersonalInfo::where('user_id',$id)->first();
        //dd($aPersonal->id_proof); exit();
        $aEducational = JobSeekerPersonalInfo::where('user_id',$id)->pluck('certification1','certification2','certification3','certification4','certification5');
        $aProfessional = JobSeekerPersonalInfo::where('user_id',$id)->pluck('offer_letter','experience_letter','salary_slip');
        $aOther = JobSeekerPersonalInfo::where('user_id',$id)->pluck('project_document');
        $aProfile = JobSeekerProfile::where('user_id',Auth::user()->id)->get();
       // dd($aProfile); exit();
        return view('web.template.CRM.job.view-profile',compact('aProfile','aPersonal','aEducational','aProfessional','aOther'));
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
        $file=$request->file('image');
        $filename=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->image->move(public_path('uploads'), $filename);
        $post = UserPostFeed::create([
            'description'=>$request->post,
            'user_id'=>Auth::user()->id,
            'hashtag'=>$request->tags,
            'image'=>$filename
        ]);
        if($post)
        {
            return redirect()->route('web.job.index');
        }

    }


    /**,
     * @param Request $request
     */
    public function editProfile(Request $request)
    {
        //dd($request->all()); exit();
        $file=$request->file('image');
        $filename=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->image->move(public_path('images'), $filename);

        $result = JobSeekerProfile::create([
            'user_id'=>Auth::user()->id,
            'image'=>$filename,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'confirm_password'=>Hash::make($request->confirm_password),
            'first_name'=>$request->first_name,
            //'last_name'=>$request->last_name,
            'gender'=>$request->gender,
            'location'=>$request->location,
            'marital_status'=>$request->marital_status,
            'position'=>$request->position,
            'total_exp'=>implode("  ",$request->total_exp),
            'file'=>$request->file,
            'about'=>$request->about,
            'mobile'=>$request->mobile,
            'contact_email'=>$request->contact_email,
            'facebook_id'=>$request->facebook_id,
            'linkedin_id'=>$request->linkedin_id,
            'twitter_id'=>$request->twitter_id,
            'higher_qualification'=>$request->higher_qualification,
            'specialization_course'=>implode("  ",$request->specialization_course),
            'college_name'=>$request->college_name,
            'passing_year'=>implode("  ",$request->passing_year),
            'current_designation'=>$request->current_designation,
            'company_name'=>$request->company_name,
            'company_location'=>$request->company_location,
            'company_experience'=>implode("  ",$request->company_experience),
            'annual_salary'=>implode("  ",$request->annual_salary),
            'industry'=>$request->industry,
            'functional_area'=>$request->functional_area,
            //'skills'=>$request->skills,
            'discription'=>$request->discription,
            'project_name'=>$request->project_name,
            'project_year'=>$request->project_year,
            'client_name'=>$request->client_name,
            'client_description'=>$request->client_description,
        ]);

        if($result)
        {
            /*if($request->project == '5')
            {
                $rating = Rating::create([
                   'user_id'=>Auth::user()->id,
                   'job_seeker_profile_id'=>Auth::user()->id,
                    'rating'=>5
                ]);
            }elseif($request->education == '4')
            {
                $rating = Rating::create([
                    'user_id'=>Auth::user()->id,
                    'job_seeker_profile_id'=>Auth::user()->id,
                    'rating'=>4
                ]);

            }elseif($request->contact_info == '3')
            {
                $rating = Rating::create([
                    'user_id'=>Auth::user()->id,
                    'job_seeker_profile_id'=>Auth::user()->id,
                    'rating'=>3
                ]);

            }elseif($request->personal_info == '2')
            {
                $rating = Rating::create([
                    'user_id'=>Auth::user()->id,
                    'job_seeker_profile_id'=>Auth::user()->id,
                    'rating'=>2
                ]);

            }else
            {
                $rating = Rating::create([
                    'user_id'=>Auth::user()->id,
                    'job_seeker_profile_id'=>Auth::user()->id,
                    'rating'=>1
                ]);

            }*/
            Session::flash('success','Your Profile Successful Registered');
            return redirect()->route('web.job.profilePage');
        }else
        {
            Session::flash('success','Your Profile Not Successful Registered');
            return redirect()->route('web.job.profilePage');
        }
    }


    public function personalInfo(Request $request)
    {
        //dd($request->all()); exit();
        $file=$request->file('citizenship_proof');
        $citizen_proof=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->citizenship_proof->move(public_path('document'), $citizen_proof);

        $file=$request->file('address_proof');
        $address_proof=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->address_proof->move(public_path('document'), $address_proof);

        $file=$request->file('id_proof');
        $id_proof=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->id_proof->move(public_path('personal'), $id_proof);

        $file=$request->file('document_1');
        $document_1=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->document_1->move(public_path('personal'), $document_1);

        $file=$request->file('document_2');
        $document_2=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->document_2->move(public_path('personal'), $document_2);

        $file=$request->file('document_3');
        $document_3=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->document_3->move(public_path('personal'), $document_3);

        $file=$request->file('offer_letter');
        $offer_letter=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->offer_letter->move(public_path('professional'), $offer_letter);

        $file=$request->file('experience_letter');
        $experience_letter=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->experience_letter->move(public_path('professional'), $experience_letter);

        $file=$request->file('promotion_letter');
        $promotion_letter=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->promotion_letter->move(public_path('professional'), $citizen_proof);

        $file=$request->file('salary_slip');
        $salary_slip=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->salary_slip->move(public_path('professional'), $salary_slip);

        $file=$request->file('referece_letter');
        $referece_letter=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->referece_letter->move(public_path('professional'), $referece_letter);

        $file=$request->file('certification1');
        $certification1=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->certification1->move(public_path('educational'), $certification1);

        $file=$request->file('certification2');
        $certification2=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->certification2->move(public_path('educational'), $certification2);

        $file=$request->file('certification3');
        $certification3=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->certification3->move(public_path('educational'), $certification3);

        $file=$request->file('certification4');
        $certification4=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->certification4->move(public_path('educational'), $certification4);

        $file=$request->file('certification5');
        $certification5=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->certification5->move(public_path('educational'), $certification5);

        $file=$request->file('project_document');
        $project_document=$file->getClientOriginalName();
        $this->originalname=$file->getClientOriginalName();
        $request->project_document->move(public_path('project'), $project_document);

        $result = JobSeekerPersonalInfo::create([
            'user_id'=>Auth::user()->id,
            'citizen'=>$request->citizen,
            'citizenship_proof'=>$citizen_proof,
            'current_address'=>$request->current_address,
            'permanent_address'=>$request->permanent_address,
            'address_proof'=>$address_proof,
            'id_proof'=>$id_proof,
            'family_member'=>$request->family_member,
            'college_name'=>$request->college_name,
            'acadamic_session'=>implode("  ",$request->acadamic_session),
            'document_1'=>$document_1,
            'document_2'=>$document_2,
            'document_3'=>$document_3,
            'professional_title'=>$request->professional_title,
            'company_name'=>$request->company_name,
            'duration'=>implode("  ",$request->duration),
            'offer_letter'=>$offer_letter,
            'experience_letter'=>$experience_letter,
            'promotion_letter'=>$promotion_letter,
            'salary_slip'=>$salary_slip,
            'referece_letter'=>$referece_letter,
            'certification1'=>$certification1,
            'certification2'=>$certification2,
            'certification3'=>$certification3,
            'certification4'=>$certification4,
            'certification5'=>$certification5,
            'client_name'=>$request->client_name,
            'project_type'=>$request->project_type,
            'project_document'=>$project_document,
            'description'=>$request->description,
        ]);
        if($result)
        {
            Session::flash('success','Your Personal Details Successful Registered');
            return redirect()->route('web.job.profilePage');
        }else
        {
            Session::flash('success','Your Personal Details Not Successful Registered');
            return redirect()->route('web.job.profilePage');
        }

    }
}
