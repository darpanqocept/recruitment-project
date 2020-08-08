@include('web.template.CRM.recruiter.include.header')
<?php
$data = array();
if (!empty($selectpost)) {
    $data = $selectpost;
}
$id = $data[0]->id;
$exp = $data[0]->experience;
$qualifi = $data[0]->qualification;
$domain = $data[0]->domain;
$cdomain = $data[0]->company_domain;
$shift = $data[0]->shift;
$interview_type = $data[0]->interview_type;
$gender = $data[0]->genders;
$functional = $data[0]->functional_area;

?>
<link href="{{asset('web/crm/free/plugins/tagsInput/jquery.tagsinput.css')}}" rel="stylesheet" type="text/css">

<div class="vd_content-wrapper">
    <div class="vd_container">
        <div class="vd_content clearfix">
            <div class="vd_head-section clearfix">
                <div class="vd_panel-header">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a> </li>

                        <li class="active">Edit Job</li>
                    </ul>
                    <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
                        <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                        <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                        <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
                    </div>
                </div>
            </div>
            <div class="vd_title-section clearfix">
                <div class="vd_panel-header">
                    <h1>Edit Job Form</h1>
                    <small class="subtitle">Form for Edit Job</small> </div>
            </div>
            <div class="vd_content-section clearfix">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel widget light-widget">
                            <div class="panel-heading">
                                <form method="post" action="{!! route('web.recruiter.editpostJob',$id) !!}" >
                                    @csrf
                                    <div class="row setup-content">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h3> Job Details</h3>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Title<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input class="form-control" id="job_title" name="job_title" value="{{ $data[0]->title }}" type="text" placeholder="Title">
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Experience<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="">
                                                        <div class="col-xs-4">
                                                            <select  id="job_exper" class="form-control" style="width:100%" name="job_exper"><option value="" >Experince<i style="color: red">&nbsp;*&nbsp;</i> </option>
                                                                <option @if($exp=='0-1')selected @endif value="0-1">0 - 1 Years</option>
                                                                <option @if($exp == '2-3') selected @endif  value="2-3">2 - 3 Years</option>
                                                                <option @if($exp == '3-4')selected @endif value="3-4">3 - 4 Years</option>
                                                                <option @if($exp == '4-5')selected @endif value="4-5">4 - 5 Years</option>
                                                                <option @if($exp == '5-6')selected @endif value="5-6">5 - 6 Years</option>
                                                                <option @if($exp == '6-7')selected @endif value="6-7">6 - 7 Years</option>
                                                                <option @if($exp == '7-8')selected @endif value="7-8">7 - 8 Years</option>
                                                                <option @if($exp == '8-9')selected @endif value="8-9">8 - 9 Years</option>
                                                                <!-- <option @if($exp='9+') selected @endif value="9+">10++</option> -->
                                                            </select>
                                                        </div>
                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Salary<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="">
                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-9">
                                                            <input class="form-control" type="text" name="sallary" value="{{ $data[0]->sallary }}" id="sallary" placeholder="Sallary">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Number of positions<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input class="form-control" name="no_of_pos" id="no_of_pos" value="{{ $data[0]->no_of_pos }}" type="number" min="1" placeholder="Number of positions">
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Qualification<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="col-xs-12">
                                                            <select  id="qualification" name="qualification"><option value="" selected="selected">Select  Qualification</option>
                                                                <option  @if($qualifi=='Doctorate/PhD')selected @endif  value="Doctorate/PhD">Doctorate/PhD</option>
                                                                <option @if($qualifi=='Post Graduation')selected @endif value="Post Graduation">Post Graduation</option>
                                                                <option @if($qualifi=='Graduation')selected @endif value="Graduation">Graduation</option>
                                                                <option @if($qualifi=='12th/O-Level')selected @endif value="12th/O-Level">12th/O-Level</option>
                                                                <option @if($qualifi=='10th')selected @endif value="10th">10th</option>
                                                            </select>
                                                        </div>
                                                        <!-- col-xs-12 -->
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Domain<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-12">
                                                            <select  id="domain" name="domain"><option value="" selected="selected">Select Domain</option>
                                                                <option @if($domain == 'IT')selected @endif value="IT">IT</option>
                                                                <option @if($domain == 'NON-IT')selected @endif value="NON-IT">Non IT</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Shift<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-12">
                                                            <select name="shift" id="shift"><option value="" selected="selected">Select Shift</option>
                                                                <option @if($shift=='Day Shift')selected @endif  value="Day Shift">Day Shift</option>
                                                                <option @if($shift=='Night Shift')selected @endif value="Night Shift">Night Shift</option>
                                                                <option @if($shift=='Rotational Shift')selected @endif value="Rotational Shift">Rotational Shift</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Functional Area<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-12">
                                                            <select name="functional" id="functional" ><option value="" selected="selected">Select functional Area</option>
                                                                <option @if($functional=='Manager')selected @endif  value="Manager">Manager</option>
                                                                <option @if($functional=='Marketing')selected @endif value="Marketing">Marketing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group" style="padding-top: 20px ; padding-bottom: 20px  ; margin-bottom: 20px">
                                                    <label class="col-sm-3 control-label">Skills<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-12">
                                                            <input type="text" data-rel = "tags-input" name="skillss" value="{{ $selectpost[0]->skills }}" id="skillss">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 20px" >
                                                    <label class="col-sm-3 control-label">Gender<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-12">
                                                            <select name="gender" id="gender">
                                                                <option value="" selected="selected">Select Gender</option>
                                                                <option @if($gender=='Male')selected @endif value="Male">Male</option>
                                                                <option @if($gender=='Female')selected @endif value="Female">Female</option>
                                                                <option @if($gender=='Any')selected @endif value="Any">Any</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group" >
                                                    <label class="col-sm-3 control-label">Interview Type<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-12">
                                                            <select name="interview_type" id="interview_type" >
                                                                <option value="" selected="selected">Select Interview Type</option>
                                                                <option @if($interview_type=='Walk In')selected @endif value="Walk In">Walk In</option>
                                                                <option @if($interview_type=='Third Party')selected @endif value="Third Party">Third Party</option>
                                                                <option @if($interview_type=='Affiliate')selected @endif value="Affiliate">Affiliate</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group"  style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 20px">
                                                    <label class="col-sm-3 control-label">Job Summary<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <textarea rows="3" name="job_summary" id="job_summary"  class="form-control" placeholder="Job Summary">{{ $data[0]->job_summary }}</textarea>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group"  style="padding-top: 30px ; padding-bottom: 25px  ; margin-top: 20px">
                                                    <label class="col-sm-3 control-label">Job Description<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <textarea rows="8" name="job_desc"  class="form-control" id="job_desc" placeholder="Job Description" >{{ $data[0]->job_description }}</textarea>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 20px">
                                                </div>

                                                <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                                                    <label class="col-sm-3 control-label">Search String<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input class="form-control" name="search_string" value="{{ $data[0]->search_string }}" id="search_string" type="text" placeholder="Search String">
                                                    </div>
                                                </div>
                                                <div class="form-group" style="padding-top: 20px ; padding-bottom: 40px  ; margin-top: 30px">
                                                    <label class="col-sm-3 control-label">Tag Group</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="text" value="{{ $data[0]->tag_group }}"  data-rel = "tags-input"   name="tag_group" id="tag_group" >
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row setup-content" id="step-2">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h3> Recruiter Details</h3>
                                                <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                                                    <label class="col-sm-3 control-label">Contact No<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="contact_no" id="contact_no" value="{{ $data[0]->contact_no }}" class="form-control" type="text" placeholder="Contact No">
                                                    </div>
                                                </div>
                                                <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                                                    <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="email" value="{{ $data[0]->email }}" id="email" class="form-control" type="text" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                                                    <label class="col-sm-3 control-label">Add Other Recruiters<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input value="{{ $data[0]->add_other_recruiter }}"  data-rel = "tags-input" type="text"  name="other_rec" id="other_rec">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-3">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h3> Company Details</h3>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Company Name<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input class="form-control" name="company_name" id="company_name" value="{{ $data[0]->company_name }}" type="text" placeholder="Company Name">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Number Of Employees<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input class="form-control" id="num_emp" value="{{ $data[0]->no_of_emp }}"  name="num_emp" type="text" placeholder="Number Of Employees">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Location<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="location" id="location" value="{{ $data[0]->location }}" class="form-control" type="text" placeholder="Location">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Website Link<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="Website_link" id="Website_link" class="form-control" value="{{ $data[0]->website_link }}" type="text" placeholder="Website Link">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="cmp_email" id="cmp_email" value="{{ $data[0]->company_email }}" class="form-control" type="text" placeholder="Email">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Domain<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="col-xs-12">
                                                            <select name="cmp_domain" id="cmp_domain">
                                                                <option value="" selected="selected">Select Domain</option>
                                                                <option @if($cdomain == 'IT')selected @endif value="IT">IT</option>
                                                                <option @if($cdomain == 'NON-IT')selected @endif value="NON-IT">Non IT</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label"> Description<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <textarea rows="8" name="cmp_desc" id="cmp_desc" class="form-control" placeholder="Company Description" >{{ $data[0]->company_description }}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-4">
                                        <div class="col-xs-12">
                                            <div class="col-md-12">
                                                <h3> Questionnaires</h3>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Questionnaires #1</label>
                                                    <div class="col-sm-9 controls">
                                                        <input class="form-control" name="q1" value="{{ $data[0]->questions }}" id="q1" type="text" placeholder="Questionnaires #1">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Questionnaires #2</label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="q2" id="q2" class="form-control" type="text" placeholder="Questionnaires #2">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Questionnaires #3</label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="q3" id="q3" class="form-control" type="text" placeholder="Questionnaires #3">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Questionnaires #4</label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="q4" id="q4" class="form-control" type="text" placeholder="Questionnaires #4">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Questionnaires #5</label>
                                                    <div class="col-sm-9 controls">
                                                        <input name="q5" id="q5" class="form-control" type="text" placeholder="Questionnaires #5">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" id="submitpost"  class="btn vd_btn vd_bg-green">Save changes</button>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('web.template.CRM.recruiter.include.footer')
<script>
    $('[data-rel^="tags-input"]').tagsInput({width:'auto'});
</script>