@include('web.template.CRM.recruiter.include.header')
<div class="vd_content-wrapper">
   <div class="vd_container">
      <div class="vd_content clearfix">
         <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
               <ul class="breadcrumb">
                  <li><a href="index-2.html">Home</a> </li>
                  <li class="active">My Job Application</li>
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
               <h1>My Job Application</h1>
               <small class="subtitle"></small>
               <div class="vd_panel-menu  hidden-xs">
                  <div class="menu">
                     <div data-action="click-trigger"> <span class="menu-icon mgr-10"></span>List Of Ads <i class="fa fa-angle-down"></i> </div>
                     <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target" style="display: none;">
                        <div class="child-menu">
                           <div class="content-list content-menu">
                              <ul class="list-wrapper pd-lr-10">
                                 <li>
                                    <a href="abcPostedJob.php">
                                       <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                       <div class="menu-text">WizRich Solution</div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="xyzPostedJob.php">
                                       <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                       <div class="menu-text">Codester Solution</div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="jklPostedJob.php">
                                       <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                       <div class="menu-text">Infosys</div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  &nbsp;&nbsp;            <button class="btn btn-primary btn-lg " data-toggle="modal" data-target="#myModal"> Post New Job Ads</button>
                  <!-- vd_panel-menu -->
               </div>
               <!-- vd_panel-header -->
            </div>
         </div>
         <div class="vd_content-section clearfix">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
                  <div class="vd_status-widget vd_bg-blue widget">
                     <div class="vd_panel-menu">
                        <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                     </div>
                     <!-- vd_panel-menu -->
                     <a class="panel-body" href="PostedJob.php">
                        <div class="clearfix">
                           <span class="menu-icon">
                           <i class="fa fa-upload " aria-hidden="true"></i>
                           </span>
                           <span class="menu-value">
                          {{ count($selectpost) }}
                           </span>
                        </div>
                        <div class="menu-text clearfix">
                           Posted Jobs
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
                  <div class="vd_status-widget vd_bg-green widget">
                     <div class="vd_panel-menu">
                        <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                     </div>
                     <!-- vd_panel-menu -->
                     <a class="panel-body" href="sharedjob.php">
                        <div class="clearfix">
                           <span class="menu-icon">
                           <i class="fa fa-share-square-o " aria-hidden="true"></i>
                           </span>
                           <span class="menu-value">
                           64
                           </span>
                        </div>
                        <div class="menu-text clearfix">
                           Shared Jobs
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mgbt-xs-15">
                  <div class="vd_status-widget vd_bg-yellow widget">
                     <div class="vd_panel-menu">
                        <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                     </div>
                     <!-- vd_panel-menu -->
                     <a class="panel-body" href="Postedfreelancingjob.php">
                        <div class="clearfix">
                           <span class="menu-icon">
                           <i class="fa fa-inr" aria-hidden="true"></i>
                           </span>
                           <span class="menu-value">
                           24
                           </span>
                        </div>
                        <div class="menu-text clearfix">
                           Freelancing Jobs
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mgbt-xs-15">
                  <div class="vd_status-widget vd_bg-red widget">
                     <div class="vd_panel-menu">
                        <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                     </div>
                     <!-- vd_panel-menu -->
                     <a class="panel-body" href="postedaffiliatejob.php">
                        <div class="clearfix">
                           <span class="menu-icon">
                           <i class="fa fa-money " aria-hidden="true"></i>
                           </span>
                           <span class="menu-value">
                           78
                           </span>
                        </div>
                        <div class="menu-text clearfix">
                           Affiliate Jobs
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="modal fade col-md-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header vd_bg-blue vd_white">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                           <h4 class="modal-title" id="myModalLabel">Job Post</h4>
                        </div>
                        <div class="modal-body" style="overflow-y: scroll; height: 600px " data-rel="scroll" data-scrollheight="600">
                           <style>
                              body{
                              margin-top:40px;
                              }
                              .stepwizard-step p {
                              margin-top: 10px;
                              }
                              .stepwizard-row {
                              display: table-row;
                              }
                              .stepwizard {
                              display: table;
                              width: 100%;
                              position: relative;
                              }
                              .stepwizard-step button[disabled] {
                              opacity: 1 !important;
                              filter: alpha(opacity=100) !important;
                              }
                              .stepwizard-row:before {
                              top: 14px;
                              bottom: 0;
                              position: absolute;
                              content: " ";
                              width: 100%;
                              height: 1px;
                              background-color: #ccc;
                              z-order: 0;
                              }
                              .stepwizard-step {
                              display: table-cell;
                              text-align: center;
                              position: relative;
                              }
                              .btn-circle {
                              width: 30px;
                              height: 30px;
                              text-align: center;
                              padding: 6px 0;
                              font-size: 12px;
                              line-height: 1.428571429;
                              border-radius: 15px;
                              }
                           </style>
                           <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                           <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
                           <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                           <!------ Include the above in your HEAD tag ---------->
                           <div class="container">
                              <div class="stepwizard">
                                 <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step">
                                       <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                       <p>Job Details</p>
                                    </div>
                                    <div class="stepwizard-step">
                                       <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                       <p>Recruiter Details</p>
                                    </div>
                                    <div class="stepwizard-step">
                                       <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                       <p>Company Details</p>
                                    </div>
                                    <div class="stepwizard-step">
                                       <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                       <p>Questionnaires</p>
                                    </div>
                                 </div>
                              </div>
                             <form role="form" method="post" action="{!! route('web.recruiter.postJob') !!}" >
                                @csrf
                                 <div class="row setup-content" id="step-1">
                                    <div class="col-xs-12">
                                       <div class="col-md-12">
                                          <h3> Job Details</h3>   
                              <div class="form-group">
                              <label class="col-sm-3 control-label">Title<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                              <input class="form-control" id="job_title" name="job_title" type="text" placeholder="Title">
                              </div>
                              </div>
                              <br> <br>
                              <div class="form-group">
                              <label class="col-sm-3 control-label">Experience<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="">
                              <div class="col-xs-4">
                              <select  id="job_exper" class="form-control" style="width:100%" name="job_exper"><option value="" selected="selected">Experince<i style="color: red">&nbsp;*&nbsp;</i> </option>
                              <option value="0-1">0 - 1 Years</option>
                              <option value="2-3">2 - 3 Years</option>
                              <option value="3-4">3 - 4 Years</option>
                              <option value="4-5">4 - 5 Years</option>
                              <option value="5-6">5 - 6 Years</option>
                              <option value="6-7">6 - 7 Years</option>
                              <option value="7-8">7 - 8 Years</option>
                              <option value="8-9">8 - 9 Years</option>
                              <option value="9+">10++</option>
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
                              <input class="form-control" type="text" name="sallary" id="sallary" placeholder="Sallary">
                              </div>
                              </div>
                              </div>
                              <br> <br>
                              <div class="form-group">
                              <label class="col-sm-3 control-label">Number of positions<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                              <input class="form-control" name="no_of_pos" id="no_of_pos" type="number" min="1" placeholder="Number of positions">
                              </div>
                              </div>
                              <br> <br>
                              <div class="form-group">
                              <label class="col-sm-3 control-label">Qualification<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                              <div class="col-xs-12">
                              <select  id="qualification" name="qualification"><option value="" selected="selected">Select  Qualification</option>
                              <option value="Doctorate/PhD">Doctorate/PhD</option>
                              <option value="Post Graduation">Post Graduation</option>
                              <option value="Graduation">Graduation</option>
                              <option value="12th/O-Level">12th/O-Level</option>
                              <option value="10th">10th</option>
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
                              <option value="IT">IT</option>
                              <option value="NON-IT">Non IT</option>
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
                              <option value="Day Shift">Day Shift</option>
                              <option value="Night Shift">Night Shift</option>
                              <option value="Rotational Shift">Rotational Shift</option>
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
                              <option value="Manager">Manager</option>
                              <option value="Marketing">Marketing</option>
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
                              <input type="text" data-rel = "tags-input" name="skillss" id="skillss">
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
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Any">Any</option>
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
                              <option value="Walk In">Walk In</option>
                              <option value="Third Party">Third Party</option>
                              <option value="Affiliate">Affiliate</option>
                              </select>
                              </div>
                              </div>
                              </div>
                              <br> <br>
                              <div class="form-group"  style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 20px">
                              <label class="col-sm-3 control-label">Job Summary<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                              <textarea rows="3" name="job_summary" id="job_summary"  class="form-control" placeholder="Job Summary"></textarea>
                              </div>
                              </div>
                              <br> <br>
                              <div class="form-group"  style="padding-top: 30px ; padding-bottom: 25px  ; margin-top: 20px">
                              <label class="col-sm-3 control-label">Job Description<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                              <textarea rows="8" name="job_desc"  class="form-control" id="job_desc" placeholder="Job Description" ></textarea>
                              </div>
                              </div>
                              <br> <br>
                              <div style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 20px">
                              </div>
                             
                              <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                              <label class="col-sm-3 control-label">Search String<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                              <input class="form-control" name="search_string" id="search_string" type="text" placeholder="Search String">
                              </div>
                              </div>
                              <div class="form-group" style="padding-top: 20px ; padding-bottom: 40px  ; margin-top: 30px">
                              <label class="col-sm-3 control-label">Tag Group</label>
                              <div class="col-sm-9 controls">
                              <input type="text" data-rel = "tags-input"  class="tagsinput" name="tag_group" id="tag_group" >
                              </div>
                              </div>
                              </div>
                             
                              <br><br>           
                                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" id="postbtn1" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px" >Next</button>
                              </div>
                              </div>
                              
                              <div class="row setup-content" id="step-2">
                                 <div class="col-xs-12">
                                    <div class="col-md-12">
                                       <h3> Recruiter Details</h3>
                                       <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                                          <label class="col-sm-3 control-label">Contact No<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                             <input name="contact_no" id="contact_no" class="form-control" type="text" placeholder="Contact No">
                                          </div>
                                       </div>
                                       <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                                          <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                             <input name="email" id="email" class="form-control" type="text" placeholder="Email">
                                          </div>
                                       </div>
                                       <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                                          <label class="col-sm-3 control-label">Add Other Recruiters<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                            <input  data-rel = "tags-input" type="text"  name="other_rec" id="other_rec">
                                          </div>
                                       </div>
                                       <button class="btn btn-primary nextBtn btn-lg pull-right" id="postbtn2" type="button" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px" >Next</button>
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
                                             <input class="form-control" name="company_name" id="company_name" type="text" placeholder="Company Name">
                                          </div>
                                       </div>
                                       <br><br>
                                       <div class="form-group">
                                          <label class="col-sm-3 control-label">Number Of Employees<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                             <input class="form-control" id="num_emp" name="num_emp" type="text" placeholder="Number Of Employees">
                                          </div>
                                       </div>
                                       <br><br>
                                       <div class="form-group">
                                          <label class="col-sm-3 control-label">Location<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                             <input name="location" id="location" class="form-control" type="text" placeholder="Location">
                                          </div>
                                       </div>
                                       <br><br>
                                       <div class="form-group">
                                          <label class="col-sm-3 control-label">Website Link<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                             <input name="Website_link" id="Website_link" class="form-control" type="text" placeholder="Website Link">
                                          </div>
                                       </div>
                                       <br><br>
                                       <div class="form-group">
                                          <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                             <input name="cmp_email" id="cmp_email" class="form-control" type="text" placeholder="Email">
                                          </div>
                                       </div>
                                       <br><br>
                                       <div class="form-group">
                                          <label class="col-sm-3 control-label">Domain<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                             <div class="col-xs-12">
                                                <select name="cmp_domain" id="cmp_domain">
                                                   <option value="" selected="selected">Select Domain</option>
                                                   <option value="IT">IT</option>
                                                   <option value="NON-IT">Non IT</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <br><br>
                                       <div class="form-group">
                                          <label class="col-sm-3 control-label"> Description<i style="color: red">&nbsp;*&nbsp;</i></label>
                                          <div class="col-sm-9 controls">
                                             <textarea rows="8" name="cmp_desc" id="cmp_desc" class="form-control" placeholder="Company Description" ></textarea>
                                          </div>
                                       </div>
                                       <br><br>
                                       <button class="btn btn-primary nextBtn btn-lg pull-right" id="postbtn3" type="button" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px" >Next</button>
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
                                             <input class="form-control" name="q1" id="q1" type="text" placeholder="Questionnaires #1">
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
                                       <br><br>
                                      <!--  <button  type="button"  >Add More</button> -->
                                       <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px" >Finish</button>
                                    </div>
                                 </div>
                              </div>
                              
                           </div>
                           <script>
                              $(document).ready(function () {
                              
                                  var navListItems = $('div.setup-panel div a'),
                                          allWells = $('.setup-content'),
                                          allNextBtn1 = $('#postbtn1');
                                          allNextBtn2 = $('#postbtn2');
                                          allNextBtn3 = $('#postbtn3');
                              
                                  allWells.hide();
                              
                                  navListItems.click(function (e) {
                                      e.preventDefault();
                                      var $target = $($(this).attr('href')),
                                              $item = $(this);
                              
                                      if (!$item.hasClass('disabled')) {
                                          navListItems.removeClass('btn-primary').addClass('btn-default');
                                          $item.addClass('btn-primary');
                                          allWells.hide();
                                          $target.show();
                                          $target.find('input:eq(0)').focus();
                                      }
                                  });
                              
                                  allNextBtn1.click(function(){
                                    var job_title = $("#job_title").val();
                                    var job_exper = $("#job_exper").val();
                                    var sallary = $("#sallary").val();
                                    var no_of_pos = $("#no_of_pos").val();
                                    var qualification = $("#qualification").val();
                                    var domain = $("#domain").val();
                                    var shift = $("#shift").val();
                                    var functional = $("#functional").val();
                                    var skillss = $("#skillss").val();
                                    var gender = $("#gender").val();
                                    var interview_type = $("#interview_type").val();
                                    var job_summary = $("#job_summary").val();
                                    var job_desc = $("#job_desc").val();                       
                                    var search_string = $("#search_string").val();
                                    var tag_group = $("#tag_group").val();
                                    if(job_title=='')
                                    {
                                        $("#job_title").focus();
                                    }
                                    else if(job_exper==''){
                                       $("#job_exper").focus();
                                    }
                                    else if(sallary==''){
                                       $("#sallary").focus();
                                    }
                                    else if(no_of_pos==''){
                                       $("#no_of_pos").focus();
                                    }
                                    else if(qualification==''){
                                       $("#qualification").focus();
                                    }
                                    else if(domain==''){
                                       $("#domain").focus();
                                    }
                                    else if(shift==''){
                                       $("#shift").focus();
                                    }
                                    else if(functional==''){
                                       $("#functional").focus();
                                    }
                                    else if(skillss==''){
                                       $("#skillss").focus();
                                    }
                                    else if(gender==''){
                                       $("#gender").focus();
                                    }
                                    else if(interview_type==''){
                                       $("#interview_type").focus();
                                    }
                                    else if(job_summary==''){
                                       $("#job_summary").focus();
                                    }
                                    else if(job_desc==''){
                                       $("#job_desc").focus();
                                    }
                                    else if(search_string==''){
                                       $("#search_string").focus();
                                    }
                                    else if(tag_group==''){
                                       $("#tag_group").focus();
                                    }
                                    else {

                                      var curStep = $(this).closest(".setup-content"),
                                              curStepBtn = curStep.attr("id"),
                                              nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                                              curInputs = curStep.find("input[type='text'],input[type='url']"),
                                              isValid = true;
                              
                                      $(".form-group").removeClass("has-error");
                                      for(var i=0; i<curInputs.length; i++){
                                          if (!curInputs[i].validity.valid){
                                              isValid = false;
                                              $(curInputs[i]).closest(".form-group").addClass("has-error");
                                          }
                                      }
                              
                                      if (isValid)
                                          nextStepWizard.removeAttr('disabled').trigger('click');
                                      }
                                  });


                                  allNextBtn2.click(function(){
                                    var contact_no = $("#contact_no").val();
                                    var email = $("#email").val();
                                    var other_rec = $("#other_rec").val();
                                    if(contact_no=='')
                                    {

                                    }
                                    else if(email=='')
                                    {
                                        $("#email").focus();
                                    }
                                    else if(other_rec=='')
                                    {
                                        $("#other_rec").focus();
                                    }
                                    else {

                                      var curStep = $(this).closest(".setup-content"),
                                              curStepBtn = curStep.attr("id"),
                                              nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                                              curInputs = curStep.find("input[type='text'],input[type='url']"),
                                              isValid = true;
                              
                                      $(".form-group").removeClass("has-error");
                                      for(var i=0; i<curInputs.length; i++){
                                          if (!curInputs[i].validity.valid){
                                              isValid = false;
                                              $(curInputs[i]).closest(".form-group").addClass("has-error");
                                          }
                                      }
                              
                                      if (isValid)
                                          nextStepWizard.removeAttr('disabled').trigger('click');
                                      }
                                  });


                                  allNextBtn3.click(function(){
                                    var company_name = $("#company_name").val();
                                    var num_emp = $("#num_emp").val();
                                    var location = $("#location").val();
                                    var Website_link = $("#Website_link").val();
                                    var cmp_email = $("#cmp_email").val();
                                    var cmp_domain = $("#cmp_domain").val();
                                    var cmp_desc = $("#cmp_desc").val();
                                    if(company_name=='')
                                    {

                                    }
                                    else if(num_emp=='')
                                    {
                                        $("#num_emp").focus();
                                    }
                                    else if(location=='')
                                    {
                                        $("#location").focus();
                                    }
                                    else if(Website_link=='')
                                    {
                                        $("#Website_link").focus();
                                    }
                                    else if(cmp_email=='')
                                    {
                                        $("#cmp_email").focus();
                                    }
                                    else if(cmp_domain=='')
                                    {
                                        $("#cmp_domain").focus();
                                    }
                                    else if(cmp_desc=='')
                                    {
                                        $("#cmp_desc").focus();
                                    }
                                    else {
                                      
                                      document.getElementById("submitpost").disabled = false;
                                      var curStep = $(this).closest(".setup-content"),
                                              curStepBtn = curStep.attr("id"),
                                              nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                                              curInputs = curStep.find("input[type='text'],input[type='url']"),
                                              isValid = true;
                              
                                      $(".form-group").removeClass("has-error");
                                      for(var i=0; i<curInputs.length; i++){
                                          if (!curInputs[i].validity.valid){
                                              isValid = false;
                                              $(curInputs[i]).closest(".form-group").addClass("has-error");
                                          }
                                      }
                              
                                      if (isValid)
                                          nextStepWizard.removeAttr('disabled').trigger('click');
                                      }
                                  });

                              
                                  $('div.setup-panel div a.btn-primary').trigger('click');
                              });
                              
                           </script>
                           
                        </div>
                        <div class="modal-footer background-login">
                           <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                           <button type="submit" id="submitpost" disabled="" class="btn vd_btn vd_bg-green">Save changes</button>
                        </div>
                     </div>

                   </form>
                  <!-- /.modal-dialog -->
               </div>
            </div>
            <div class="row">
               <h3> &nbsp;&nbsp;&nbsp;&nbsp;   Posted Jobs
               </h3>
               <div class="col-md-12">
                  <div class="panel widget">
                     <!-- <div class="panel-heading vd_bg-grey">
                        <table style=" padding: 2px ; width:100%">
                           <tr>
                              <td style=" padding: 8px ">
                                 <select id="cars">
                                    <option value="volvo">10</option>
                                    <option value="saab">25</option>
                                    <option value="opel">50</option>
                                    <option value="audi">100</option>
                                 </select>
                              </td>
                              <td style=" width: 50%">
                              </td>
                              <td style="width: 40%  ;  padding: 8px" >
                                 <input type="text" placeholder="Search " style="width:100%" >
                              </td>
                           </tr>
                        </table>
                     </div> -->
                     <div class="panel-body table-responsive">
                        <table class="table table-hover"  id="post_data_table">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Title</th>                                 
                                 <th class="center" >Summary & Skills</th>
                                 <th>Experience</th>
                                 <th>Salary</th>
                                 <th>Location</th>
                                 <th>Industry </th>
                                 <th>Company</th>
                                 <th>Status</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                            @if(count($selectpost)>0)
                            <?php $i=1; ?>
                            @foreach($selectpost as $allpost)
                              <tr>
                                 <td>{{ $i++ }}</td>
                                 <td>{{ $allpost->title }}</td>
                                 
                                 <td class="center"> <b>Education Background:</b> {{ $allpost->qualification }} <br> <b>Skill:</b> {{ $allpost->skills }}
                                 </td>
                                 <td class="center">{{ $allpost->experience }} Yrs</td>
                                 <td class="center">{{ $allpost->sallary }}</td>
                                 <td class="center">{{ $allpost->location }}</td>
                                 <td class="center">{{ $allpost->domain }}</td>
                                 <td class="center">{{ $allpost->company_name }}</td>
                                 <td class="center"><span class="label label-success">Active</span></td>
                                 <td class="menu-action"><a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green"> <i class="fa fa-eye"></i> </a> <a href="{{route('web.recruiter.editjob', $allpost->id )}}""   class="btn menu-icon vd_bd-yellow vd_yellow"> <i class="fa fa-pencil"></i> </a> <a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green"> <i class="fa fa-share-square-o "></i> </a> <a data-original-title="delete" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"> <i class="fa fa-times"></i> </a></td>
                              </tr>
                              @endforeach
                              @endif                             
                           </tbody>
                        </table>
                        <!-- <ul class="pagination">
                           <li><a href="#">«</a></li>
                           <li class="active"><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li><a href="#">4</a></li>
                           <li><a href="#">5</a></li>
                           <li><a href="#">»</a></li>
                        </ul> -->
                     </div>
                  </div>
                  <!-- Panel Widget -->
               </div>
               <!-- col-md-12 -->
            </div>
            <div class="row" style="display:none">
               <div class="col-sm-6" data-rel="sortable">
                  <div class="panel widget">
                     <div class="panel-heading vd_bg-red ">
                        <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-pie"></i> </span>Sales Manager - (IT) - Delhi & Mumbai - 1 Year Contract</h3>
                        <div class="vd_panel-menu">
                           <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-minus3"></i> </div>
                           <div data-action="refresh"  data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                           <div data-original-title="Config" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                              <div class="menu-trigger" data-action="click-trigger"> <i class="icon-cog"></i> </div>
                              <div data-action="click-target" class="vd_mega-menu-content  width-xs-2  left-xs">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">Edit</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-trophy"></i></div>
                                                <div class="menu-text">Repost</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                <div class="menu-text">Schedule</div>
                                             </a>
                                          </li>
                                          <li class="line"></li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                <div class="menu-text"> Share</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-lock"></i></div>
                                                <div class="menu-text">Copy</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body">
                        <h2> Sales Executive<span class="font-semibold">&nbsp;Officer</span> <em class="vd_soft-grey">Job Adds</em> </h2>
                        <p> <strong>RoleSales Executive/Officer<br>
                           Industry Type: IT-Software, Software Services<br>
                           Functional Area: Sales, Retail, Business Development<br>
                           Employment Type: Full Time, Permanent<br>
                           Role Category: Retail Sales</strong><br>Job description
                           Dear Candidate,
                           We are looking for a Sales Manager for one of our Clients into Software Services.
                           Designation: Business
                           Candidate: Female with min. 1-year experience.
                           Candidate Background: Hospitality Industry (hotel, travel, high end beauty product Marketing and Sales), Airline, Software Sales, Consulting, Financial Product sales.<br>
                        </p>
                        <p>Interests: IT and technology should be strong hand
                           Education Background: Science, IT B.tech, Any Tech Course, MBA, etc.
                           Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team 
                        </p>
                     </div>
                  </div>
                  <!-- Panel Widget -->
                  <div class="panel widget dark-widget  vd_bg-blue">
                     <div class="panel-heading no-title">
                        <div class="vd_panel-menu">
                           <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                           <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                              <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                              <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">Edit</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-trophy"></i></div>
                                                <div class="menu-text">Repost</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                <div class="menu-text">Schedule</div>
                                             </a>
                                          </li>
                                          <li class="line"></li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                <div class="menu-text"> Share</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-lock"></i></div>
                                                <div class="menu-text">Copy</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body  vd_bg-blue">
                        <h2> Sales Executive<span class="font-semibold">&nbsp;Officer</span> <em class="vd_soft-grey">Affiliate Adds</em> </h2>
                        <p> <strong>RoleSales Executive/Officer<br>
                           Industry Type: IT-Software, Software Services<br>
                           Functional Area: Sales, Retail, Business Development<br>
                           Employment Type: Full Time, Permanent<br>
                           Role Category: Retail Sales</strong><br>Job description
                           Dear Candidate,
                           We are looking for a Sales Manager for one of our Clients into Software Services.
                           Designation: Business
                           Candidate: Female with min. 1-year experience.
                           Candidate Background: Hospitality Industry (hotel, travel, high end beauty product Marketing and Sales), Airline, Software Sales, Consulting, Financial Product sales.<br>
                        </p>
                        <p>Interests: IT and technology should be strong hand
                           Education Background: Science, IT B.tech, Any Tech Course, MBA, etc.
                           Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team 
                        </p>
                     </div>
                  </div>
                  <!-- Panel Widget -->
                  <div class="panel widget dark-widget  vd_bg-yellow">
                     <div class="panel-heading bordered">
                        <h3 class="panel-title">Dark Panel</h3>
                        <div class="vd_panel-menu">
                           <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-minus3"></i> </div>
                           <div data-action="refresh"  data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                           <div data-original-title="Config" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                              <div class="menu-trigger" data-action="click-trigger"> <i class="icon-cog"></i> </div>
                              <div data-action="click-target" class="vd_mega-menu-content  width-xs-2  left-xs">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">Edit</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-trophy"></i></div>
                                                <div class="menu-text">Repost</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                <div class="menu-text">Schedule</div>
                                             </a>
                                          </li>
                                          <li class="line"></li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                <div class="menu-text"> Share</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-lock"></i></div>
                                                <div class="menu-text">Copy</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body  vd_bg-yellow">
                        <h2> Sales Executive<span class="font-semibold">&nbsp;Officer</span> <em class="vd_soft-black"  >Marketing Campaining</em> </h2>
                        <img src="img/1.jpg" class="img-thumbnail" >
                        <p> <strong>RoleSales Executive/Officer<br>
                           Industry Type: IT-Software, Software Services<br>
                           Functional Area: Sales, Retail, Business Development<br>
                           Employment Type: Full Time, Permanent<br>
                           Role Category: Retail Sales</strong><br>
                        </p>
                     </div>
                  </div>
                  <!-- Panel Widget -->
                  <div class="panel widget dark-widget  vd_bg-blue">
                     <div class="panel-heading no-title">
                        <div class="vd_panel-menu">
                           <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                           <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                              <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                              <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">Edit</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-trophy"></i></div>
                                                <div class="menu-text">Repost</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                <div class="menu-text">Schedule</div>
                                             </a>
                                          </li>
                                          <li class="line"></li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                <div class="menu-text"> Share</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-lock"></i></div>
                                                <div class="menu-text">Copy</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body  vd_bg-blue">
                        <h2> Sales Executive<span class="font-semibold">&nbsp;Officer</span> <em class="vd_soft-grey">Affiliate Adds</em> </h2>
                        <p> <strong>RoleSales Executive/Officer<br>
                           Industry Type: IT-Software, Software Services<br>
                           Functional Area: Sales, Retail, Business Development<br>
                           Employment Type: Full Time, Permanent<br>
                           Role Category: Retail Sales</strong><br>Job description
                           Dear Candidate,
                           We are looking for a Sales Manager for one of our Clients into Software Services.
                           Designation: Business
                           Candidate: Female with min. 1-year experience.
                           Candidate Background: Hospitality Industry (hotel, travel, high end beauty product Marketing and Sales), Airline, Software Sales, Consulting, Financial Product sales.<br>
                        </p>
                        <p>Interests: IT and technology should be strong hand
                           Education Background: Science, IT B.tech, Any Tech Course, MBA, etc.
                           Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team 
                        </p>
                     </div>
                  </div>
                  <!-- Panel Widget -->
                  <div class="panel widget light-widget" style="display: none;" >
                     <div class="panel-heading no-title">
                        <div class="vd_panel-menu">
                           <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                           <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                              <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                              <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">Panel Menu</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body-list" style="display: none;" >
                        <h2 class="pd-15 mgtp--10"> No <strong>Padding</strong> <em class="vd_soft-grey">panel body</em> </h2>
                        <div class="content-list content-image menu-action-right">
                           <div  data-rel="scroll"  >
                              <ul class="list-wrapper pd-lr-15">
                                 <li>
                                    <div class="menu-icon"><a href="#"><img alt="example image" src="img/avatar/avatar.jpg"></a></div>
                                    <div class="menu-text"> This product is so good that i manage to buy it 1 for me and 3 for my families. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco laboris nisi ut aliquip ex tris. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Samsung Galaxy S4</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">LG G2</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-3.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Sony Experia Z10</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-4.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Ipsum dolor sit amet, consectetur adipisicing elit !!! </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Nokia Lumia</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-5.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Samsung Galaxy Note 8</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-6.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">LG L3</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-7.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit xorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Motorola Moto-X</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-8.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit xorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Monitor Asus</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <div class="closing text-center"> <a href="#">See All Recent Reviews <i class="fa fa-angle-double-right"></i></a> </div>
                        </div>
                     </div>
                  </div>
                  <!-- Panel Widget -->
               </div>
               <div class="col-sm-6" data-rel="sortable">
                  <div class="panel widget light-widget">
                     <div class="panel-heading no-title">
                        <div class="vd_panel-menu">
                           <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                           <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                              <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                              <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">Edit</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-trophy"></i></div>
                                                <div class="menu-text">Repost</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                <div class="menu-text">Schedule</div>
                                             </a>
                                          </li>
                                          <li class="line"></li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                <div class="menu-text"> Share</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-lock"></i></div>
                                                <div class="menu-text">Copy</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body">
                        <h2> Sales Executive<span class="font-semibold">&nbsp;Officer</span> <em class="vd_soft-grey">Job Post</em> </h2>
                        <p> <strong>RoleSales Executive/Officer<br>
                           Industry Type: IT-Software, Software Services<br>
                           Functional Area: Sales, Retail, Business Development<br>
                           Employment Type: Full Time, Permanent<br>
                           Role Category: Retail Sales</strong><br>Job description
                           Dear Candidate,
                           We are looking for a Sales Manager for one of our Clients into Software Services.
                           Designation: Business
                           Candidate: Female with min. 1-year experience.
                           Candidate Background: Hospitality Industry (hotel, travel, high end beauty product Marketing and Sales), Airline, Software Sales, Consulting, Financial Product sales.<br>
                        </p>
                        <p>Interests: IT and technology should be strong hand
                           Education Background: Science, IT B.tech, Any Tech Course, MBA, etc.
                           Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team and sales target meeting.<br>
                           Location: Based in Gurgaon and Mumbai but open to travel all over India for Client Meetings.<br>
                        <h4>
                           Education
                        </h4>
                        UG :B.Sc in Any Specialization, B.Tech/B.E. in Any Specialization<br>
                        PG :MS/M.Sc(Science) in Any Specialization, M.Tech in Any Specialization, MBA/PGDM in Any Specialization<br>
                        Doctorate :Doctorate Not Required<br>
                        <br>
                        <h4>Key Skills</h4>
                        sales management, marketing erp sales, software marketing, business development, solution sales, it sales, travel sales, sales.
                        </p>
                     </div>
                  </div>
                  <!-- Panel Widget -->
                  <div class="panel widget light-widget panel-bd-left">
                     <div class="panel-heading no-title">
                        <div class="vd_panel-menu">
                           <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
                           <div class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Config">
                              <div data-action="click-trigger" class="menu-trigger"> <i class="icon-cog"></i> </div>
                              <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">Edit</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-trophy"></i></div>
                                                <div class="menu-text">Repost</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                <div class="menu-text">Schedule</div>
                                             </a>
                                          </li>
                                          <li class="line"></li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                <div class="menu-text"> Share</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-lock"></i></div>
                                                <div class="menu-text">Copy</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body">
                        <h2> Sales Executive<span class="font-semibold">&nbsp;Officer</span> <em class="vd_soft-grey">Job Post</em> </h2>
                        <p> <strong>RoleSales Executive/Officer<br>
                           Industry Type: IT-Software, Software Services<br>
                           Functional Area: Sales, Retail, Business Development<br>
                           Employment Type: Full Time, Permanent<br>
                           Role Category: Retail Sales</strong><br>Job description
                           Dear Candidate,
                           We are looking for a Sales Manager for one of our Clients into Software Services.
                           Designation: Business
                           Candidate: Female with min. 1-year experience.
                           Candidate Background: Hospitality Industry (hotel, travel, high end beauty product Marketing and Sales), Airline, Software Sales, Consulting, Financial Product sales.<br>
                        </p>
                        <p>Interests: IT and technology should be strong hand
                           Education Background: Science, IT B.tech, Any Tech Course, MBA, etc.
                           Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team and sales target meeting.<br>
                           Location: Based in Gurgaon and Mumbai but open to travel all over India for Client Meetings.<br>
                        <h4>
                           Education
                        </h4>
                        UG :B.Sc in Any Specialization, B.Tech/B.E. in Any Specialization<br>
                        PG :MS/M.Sc(Science) in Any Specialization, M.Tech in Any Specialization, MBA/PGDM in Any Specialization<br>
                        Doctorate :Doctorate Not Required<br>
                        <br>
                        <h4>Key Skills</h4>
                        sales management, marketing erp sales, software marketing, business development, solution sales, it sales, travel sales, sales.
                        </p>
                     </div>
                  </div>
                  <!-- Panel Widget -->
                  <div class="panel widget light-widget panel-bd-top">
                     <div class="panel-heading bordered">
                        <h3 class="panel-title">Panel Border</h3>
                        <div class="vd_panel-menu">
                           <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-minus3"></i> </div>
                           <div data-action="refresh"  data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                           <div data-original-title="Config" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                              <div class="menu-trigger" data-action="click-trigger"> <i class="icon-cog"></i> </div>
                              <div data-action="click-target" class="vd_mega-menu-content  width-xs-2  left-xs">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">Edit</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-trophy"></i></div>
                                                <div class="menu-text">Repost</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                <div class="menu-text">Schedule</div>
                                             </a>
                                          </li>
                                          <li class="line"></li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                <div class="menu-text"> Share</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-lock"></i></div>
                                                <div class="menu-text">Copy</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="menu entypo-icon" data-placement="bottom" data-toggle="tooltip" data-original-title="Close" data-action="close"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body">
                        <h2> Sales Executive<span class="font-semibold">&nbsp;Officer</span> <em class="vd_soft-grey">Job Post</em> </h2>
                        <p> <strong>RoleSales Executive/Officer<br>
                           Industry Type: IT-Software, Software Services<br>
                           Functional Area: Sales, Retail, Business Development<br>
                           Employment Type: Full Time, Permanent<br>
                           Role Category: Retail Sales</strong><br>Job description
                           Dear Candidate,
                           We are looking for a Sales Manager for one of our Clients into Software Services.
                           Designation: Business
                           Candidate: Female with min. 1-year experience.
                           Candidate Background: Hospitality Industry (hotel, travel, high end beauty product Marketing and Sales), Airline, Software Sales, Consulting, Financial Product sales.<br>
                        </p>
                        <p>Interests: IT and technology should be strong hand
                           Education Background: Science, IT B.tech, Any Tech Course, MBA, etc.
                           Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team and sales target meeting.<br>
                           Location: Based in Gurgaon and Mumbai but open to travel all over India for Client Meetings.<br>
                        <h4>
                           Education
                        </h4>
                        UG :B.Sc in Any Specialization, B.Tech/B.E. in Any Specialization<br>
                        PG :MS/M.Sc(Science) in Any Specialization, M.Tech in Any Specialization, MBA/PGDM in Any Specialization<br>
                        Doctorate :Doctorate Not Required<br>
                        <br>
                        <h4>Key Skills</h4>
                        sales management, marketing erp sales, software marketing, business development, solution sales, it sales, travel sales, sales.
                        </p>
                     </div>
                  </div>
                  <!-- Panel Widget -->
                  <div class="panel widget" style="display: none;" >
                     <div class="panel-heading vd_bg-yellow">
                        <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-pie"></i> </span> No Padding Panel Body </h3>
                        <div class="vd_panel-menu">
                           <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-minus3"></i> </div>
                           <div data-action="refresh"  data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                           <div data-original-title="Config" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                              <div class="menu-trigger" data-action="click-trigger"> <i class="icon-cog"></i> </div>
                              <div data-action="click-target" class="vd_mega-menu-content  width-xs-2  left-xs">
                                 <div class="child-menu">
                                    <div class="content-list content-menu">
                                       <ul class="list-wrapper pd-lr-10">
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                <div class="menu-text">User Menu</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-trophy"></i></div>
                                                <div class="menu-text">Panel Menu</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                <div class="menu-text">Other Menu</div>
                                             </a>
                                          </li>
                                          <li class="line"></li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                <div class="menu-text"> Tasks</div>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <div class="menu-icon"><i class=" icon-lock"></i></div>
                                                <div class="menu-text">Privacy</div>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"> <i class="icon-cross"></i> </div>
                        </div>
                        <!-- vd_panel-menu -->
                     </div>
                     <div class="panel-body-list">
                        <div class="content-list content-image menu-action-right">
                           <div  data-rel="scroll"  >
                              <ul class="list-wrapper pd-lr-15">
                                 <li>
                                    <div class="menu-icon"><a href="#"><img alt="example image" src="img/avatar/avatar.jpg"></a></div>
                                    <div class="menu-text"> This product is so good that i manage to buy it 1 for me and 3 for my families. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco laboris nisi ut aliquip ex tris. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Samsung Galaxy S4</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">LG G2</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-3.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Consectetur adipisicing elit, sed do eiusmod. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Sony Experia Z10</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-4.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Ipsum dolor sit amet, consectetur adipisicing elit !!! </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Nokia Lumia</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-5.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Samsung Galaxy Note 8</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-6.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">LG L3</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-7.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit xorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Motorola Moto-X</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-8.jpg"></div>
                                    <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit xorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                    <div class="menu-text">
                                       <div class="menu-info"> in <a href="#">Monitor Asus</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                    </div>
                                    <div class="menu-action">
                                       <div class="menu-action-icon vd_green"  data-original-title="Approve" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-check"></i> </div>
                                       <div class="menu-action-icon vd_red"   data-original-title="Reject" data-toggle="tooltip" data-placement="bottom"> <i class="fa fa-times"></i> </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <div class="closing text-center"> <a href="#">See All Recent Reviews <i class="fa fa-angle-double-right"></i></a> </div>
                        </div>
                     </div>
                  </div>
                  <!-- Panel Widget -->
               </div>
               <!-- col-sm-6 -->
            </div>
            <!-- row -->
         </div>
         <!-- .vd_content-section -->
      </div>
      <!-- .vd_content -->
   </div>
   <!-- .vd_container -->
</div>
<!-- .vd_content-wrapper -->
<!-- Middle Content End -->
@include('web.template.CRM.recruiter.include.footer')
<script>
    $(document).ready(function() {
    $('#post_data_table').DataTable();
} );

</script>
<script>
$('[data-rel^="tags-input"]').tagsInput({width:'auto'});
</script>