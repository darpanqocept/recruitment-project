@include('web.template.CRM.job.include.header')

<div class="vd_content-wrapper">
    <div class="vd_container">
        <div class="vd_content clearfix">
            <div class="vd_head-section clearfix">
                <div class="vd_panel-header">
                    <ul class="breadcrumb">
                        <li><a href="index-2.html">Home</a> </li>

                        <li class="active">User Profile Form</li>
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
                    <h1>User Profile Form</h1>
                    <small class="subtitle">Form for user profile</small> </div>
            </div>
            <div class="vd_content-section clearfix">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel widget light-widget">
                            <div class="panel-heading no-title"> </div>
                            <form class="form-horizontal" action="{{route('web.job.editProfile')}}" method="post" enctype="multipart/form-data" >
                                    {{csrf_field()}}
                                <div  class="panel-body">
                                    <br/>
                                    <div class="row">
                                        <div class="col-sm-3 mgbt-xs-20">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <div class="form-img text-center mgbt-xs-15"> @foreach($image as $img)<img src="/images/{{$img->image}}" width="200" height="200">@endforeach </div>
                                                    <div class="form-img-action text-center mgbt-xs-20"> <a class="btn vd_btn  vd_bg-blue" id="icon-file18"><i class="fa fa-cloud-upload append-icon"><input type="file" id="image18" name="image" required style="display: none;"></i> Upload</a> </div>
                                                    <br/>
                                                    <div>
                                                        <table class="table table-striped table-hover">
                                                            <tbody>
                                                            <tr>
                                                                <td style="width:60%;">Status</td>
                                                                <td><span class="label label-success">Active</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>User Rating</td>
                                                                <td>
                                                                   {{-- @foreach($rating as $star)--}}


                                                                    <i class="fa fa-star vd_yellow fa-fw">{{--{{$star['rating']}}--}}</i>

                                                                   {{-- @endforeach--}}
                                                                   </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Score</td>
                                                                <td>                    <button class="btn btn-primary " data-toggle="modal" data-target="#myModal"><i style="color:red" class="fa fa-exclamation" aria-hidden="true"></i> 460 </button></td>
                                                            </tr>
                                                            <tr>


                                                                <td><b>Verified Documents</b></td>
                                                                <td><div style="text-align:right"> <button class="btn btn-primary " data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"   >Upload</button> </div></td>


                                                            </tr>
                                                            <tr>
                                                                <td>Personal</td>
                                                                <td>   Verified &nbsp;&nbsp;<i style="color:green" class="fa fa-check-circle" aria-hidden="true"></i>                   </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Professional</td>
                                                                <td>   Verified &nbsp;&nbsp;<i style="color:green" class="fa fa-check-circle" aria-hidden="true"></i>                   </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Educational</td>
                                                                <td>  Verified &nbsp;&nbsp;<i style="color:green" class="fa fa-check-circle" aria-hidden="true"></i>                    </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Certificate</td>
                                                                <td> Verified &nbsp;&nbsp;<i style="color:green" class="fa fa-check-circle" aria-hidden="true"></i>                     </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Others</td>
                                                                <td>      Pending &nbsp;&nbsp;<i style="color:red" class="fa fa-exclamation" aria-hidden="true"></i>                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Member Since</td>
                                                                <td> Jan 07, 2014 </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-9">
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @endif
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <h3 class="mgbt-xs-15">Account Setting</h3>
                                                <input type="hidden" name="account_setting" value="1">
                                            <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="email"  placeholder="email@yourcompany.com" name="email" required>
                                                        </div>
                                                        <!-- col-xs-12
                                                        <div class="col-xs-2">
                                                          <div class="btn-action">
                                                            <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                            <ul class="dropdown-menu pull-right">
                                                              <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                              <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                              <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                            </ul>
                                                          </div>

                                                        </div>
                           btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Username<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text"  placeholder="username" name="username" required>
                                                        </div>
                                                        <!-- col-xs-12
                                                     <div class="col-xs-2">
                                                       <div class="btn-action">
                                                         <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                         <ul class="dropdown-menu pull-right">
                                                           <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                           <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                           <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                         </ul>
                                                       </div>

                                                     </div>
                        btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Password<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="password" class="width-40"  placeholder="password" name="password" required>
                                                        </div>
                                                        <!-- col-xs-12 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Confirm Password<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="password" class="width-40"  placeholder="password" name="confirm_password" required>
                                                        </div>
                                                        <!-- col-xs-12 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <hr />
                                            <h3 class="mgbt-xs-15">Personal Info</h3>
                                                <input type="hidden" name="personal_info" value="2">
                                            <div style="text-align:right"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">First Name<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text"  placeholder="First name as per documents" name="first_name" required>
                                                        </div>
                                                        <!-- col-xs-12
                                              <div class="col-xs-2">
                                                <div class="btn-action">
                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                  <ul class="dropdown-menu pull-right">
                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                  </ul>
                                                </div>

                                              </div>
                 btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Last Name<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text" placeholder="Last name as per documents" name="last_name" required>
                                                        </div>
                                                        <!-- col-xs-12
                                           <div class="col-xs-2">
                                             <div class="btn-action">
                                               <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                               <ul class="dropdown-menu pull-right">
                                                 <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                 <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                 <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                               </ul>
                                             </div>

                                           </div>
              btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Gender<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                <span class="vd_radio radio-info">
                                  <input type="radio" checked="" value="male" id="optionsRadios3" name="gender" required>
                                  <label for="optionsRadios3"> Male </label>
                                </span>
                                <span class="vd_radio  radio-danger" >

                                  <input type="radio" value="female" id="optionsRadios4" name="gender" required>
                                  <label for="optionsRadios4"> Female </label>
                                </span>


                                                        </div>

                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Birthday<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text" id="datepicker-normal" class="width-40" required name="dob" />
                                                        </div>

                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Location<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text" id="datepicker-normal" class="width-40" required name="location" />
                                                        </div>

                                                        <!-- col-xs-12
                                             <div class="col-xs-2">
                                               <div class="btn-action">
                                                 <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                 <ul class="dropdown-menu pull-right">
                                                   <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                   <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                   <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                 </ul>
                                               </div>

                                             </div>
                btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Marital Status<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <select class="width-40" name="marital_status" required>
                                                                <option>Single</option>
                                                                <option>Married</option>
                                                                <option>Divorced</option>
                                                                <option>Widow</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Position<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <select class="width-40" name="position" required>
                                                                <option value="">Select Your Position</option>
                                                                <option value="fresher" id="fresher">Freshers</option>
                                                                <option value="experience" id="experience" >Experienced</option>

                                                                <option value="CEO">CEO</option>
                                                                <option value="director">Director</option>
                                                                <option value="manager">Manager</option>
                                                                <option value="staff">Staff</option>
                                                                <option value="office_boy">Office Boy</option>
                                                            </select>
                                                        </div>
                                                        <!-- col-xs-12
                                                                 <div class="col-xs-2">
                                                                   <div class="btn-action">
                                                                     <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                     <ul class="dropdown-menu pull-right">
                                                                       <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                       <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                       <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                     </ul>
                                                                   </div>

                                                                 </div>
                                    btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->
                                            <div class="form-group"  >
                                                <label class="col-sm-3 control-label">Total Exp.<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-4">

                                                            <select  id="degree_level_id" name="total_exp[]" required>
                                                                <option value="" selected="selected">Years</option>
                                                                <option value="1 year">0 Year</option>
                                                                <option value="2 year">1 Year</option>
                                                                <option value="3 year">2 Years</option>
                                                                <option value="4 year">3 Years</option>
                                                                <option value="5 year">4 Years</option>
                                                                <option value="6 year">5 Years</option>
                                                                <option value="7 year">6 Years</option>
                                                                <option value="8 year">7 Years</option>
                                                                <option value="9 year">8 Years</option>
                                                                <option value="10 year">9 Years</option>
                                                                <option value="10 year">10+ Years</option>
                                                            </select>

                                                        </div>

                                                        <!-- col-xs-12 -->
                                                        <div class="col-xs-4">
                                                            <select  id="degree_type_id" name="total_exp[]" required>
                                                                <option value="" selected="selected">Months</option>
                                                                <option value="0">0</option>
                                                                <option value="2">1 Month</option>
                                                                <option value="3">2 Months</option>
                                                                <option value="4">3 Months</option>
                                                                <option value="5">4 Months</option>
                                                                <option value="6">5 Months</option>
                                                                <option value="7">6 Months</option>
                                                                <option value="8">7 Months</option>
                                                                <option value="9">8 Months</option>
                                                                <option value="10">9 Months</option>
                                                                <option value="11">10 Months</option>
                                                                <option value="11">11 Months</option>

                                                            </select>

                                                        </div>
                                                        <div class="col-xs-1">
                                                        </div>

                                                        <!-- col-xs-12
                                       <div class="col-xs-2">
                                         <div class="btn-action">
                                           <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                           <ul class="dropdown-menu pull-right">
                                             <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                             <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                             <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                           </ul>
                                         </div>

                                       </div>
          btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Upload Resume</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);">   <input class="fa fa-cloud-upload append-icon" type="file" name="file" required></a> (pdf,doc,docs,txt)
                                                        </div>
                                                        <!-- col-xs-12 -->
                                                        <!-- col-xs-12
                                                                       <div class="col-xs-2">
                                                                         <div class="btn-action">
                                                                           <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                           <ul class="dropdown-menu pull-right">
                                                                             <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                             <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                             <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                           </ul>
                                                                         </div>

                                                                       </div>
                                          btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            {{--<div class="form-group">

                                                <label class="col-sm-3 control-label">Language<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">

                                                            <div id="tags1584440712527_tagsinput" class="tagsinput" style="width: auto; height: 100px;">
                                                                <span class="tag"><span>Bhojp&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                                                                <span class="tag"><span>Hindi&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                                                <span class="tag"><span>English&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                                                <span class="tag"><span>Marathi&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                                                <span class="tag"><span>Hinglish&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                                                                <div id="tags1584440712527_addTag"><input id="tags1584440712527_tag" value="" data-default="add a tag" style="color: rgb(102, 102, 102); width: 68px;"></div><div class="tags_clear"></div></div>


                                                        </div>
                                                        <!-- col-xs-12
                                                     <div class="col-xs-2">
                                                       <div class="btn-action">
                                                         <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                         <ul class="dropdown-menu pull-right">
                                                           <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                           <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                           <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                         </ul>
                                                       </div>

                                                     </div>
                        btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>--}}
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">About<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <textarea rows="3" placeholder="About Yourself" name="about" required></textarea>
                                                        </div>
                                                        <!-- col-xs-12
                                            <div class="col-xs-2">
                                              <div class="btn-action">
                                                <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                <ul class="dropdown-menu pull-right">
                                                  <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                  <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                  <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                </ul>
                                              </div>

                                            </div>
               btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>





                                            <!-- form-group -->

                                            <hr/>
                                            <h3 class="mgbt-xs-15">Contact Info</h3>
                                                <input type="hidden" name="contact_info" value="3">
                                            <div style="text-align:right"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mobile Phone<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text"  placeholder="mobile phone" name="mobile" required>
                                                        </div>
                                                        <!-- col-xs-12
                                          <div class="col-xs-2">
                                            <div class="btn-action">
                                              <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                              <ul class="dropdown-menu pull-right">
                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                              </ul>
                                            </div>

                                          </div>
             btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text"  placeholder="Email" name="contact_email" required>
                                                        </div>

                                                        <!-- col-xs-12
                                          <div class="col-xs-2">
                                            <div class="btn-action">
                                              <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                              <ul class="dropdown-menu pull-right">
                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                              </ul>
                                            </div>

                                          </div>
             btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Facebook</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text"  placeholder="facebook" name="facebook_id" >
                                                        </div>
                                                        <!-- col-xs-12
                                                                      <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                          <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                          <ul class="dropdown-menu pull-right">
                                                                            <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                            <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                          </ul>
                                                                        </div>

                                                                      </div>
                                         btn-action col-sm-10 -->
                                                    </div>                            <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">LinkedIn</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text"  placeholder="LinkedIn" name="linkedin_id">
                                                        </div>

                                                        <!-- col-xs-12
                                          <div class="col-xs-2">
                                            <div class="btn-action">
                                              <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                              <ul class="dropdown-menu pull-right">
                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                              </ul>
                                            </div>

                                          </div>
             btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Twitter</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text" placeholder="twitter" name="twitter_id">
                                                        </div>
                                                        <!-- col-xs-12
                                                                      <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                          <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                          <ul class="dropdown-menu pull-right">
                                                                            <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                            <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                          </ul>
                                                                        </div>

                                                                      </div>
                                         btn-action col-sm-10 -->
                                                    </div>
                                                    <!-- row -->
                                                </div>
                                                <!-- col-sm-10 -->
                                            </div>

                                            <!-- form-group -->
                                            <div id="Education_Details">
                                                <hr/>
                                                <h3 class="mgbt-xs-15">Education</h3>
                                                <input type="hidden" name="education" value="4">
                                                <div style="text-align:right"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                                <SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
                                                <SCRIPT>
                                                    function addMoreEDU() {
                                                        $("<DIV>").load("input.php", function() {
                                                            $("#product").append($(this).html());
                                                        });
                                                    }
                                                    function deleteRow() {
                                                        $('DIV.product-item').each(function(index, item){
                                                            jQuery(':checkbox', this).each(function () {
                                                                if ($(this).is(':checked')) {
                                                                    $(item).remove();
                                                                }
                                                            });
                                                        });
                                                    }
                                                </SCRIPT>
                                                <div id="product">

                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Highest Qualification<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-9">

                                                                    <select  id="degree_level_id" name="higher_qualification" required><option value="" selected="selected">Select Highest Qualification</option>
                                                                        <option value="Doctorate">Doctorate/PhD</option>
                                                                        <option value="Post_Graduation">Post Graduation</option>
                                                                        <option value="Graduation">Graduation</option>
                                                                        <option value="12th">12th/O-Level</option>
                                                                        <option value="10th">10th</option>

                                                                    </select>



                                                                </div>
                                                                <!-- col-xs-12 -->

                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>
                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Course / Specialization<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-5">

                                                                    <select  id="degree_level_id" name="specialization_course[]" required>
                                                                        <option value="" selected="selected">Select Course</option>
                                                                        <option value="B.A.">B.A.</option>
                                                                        <option value="B.Sc.">B.Sc.</option>
                                                                        <option value="B.Com">B.Com</option>
                                                                        <option value="BMS">BMS</option>
                                                                        <option value="BBA">BBA</option>
                                                                        <option value="B.Des">B.Des</option></select>

                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-4">
                                                                    <select  id="degree_type_id" name="specialization_course[]">
                                                                        <option value="" selected="selected">Specialization<i style="color: red">&nbsp;*&nbsp;</i></option>

                                                                        <option value="Biology">Biology</option>
                                                                        <option value="Botany">Botany</option>
                                                                        <option value="Chem">Chem</option>

                                                                    </select>

                                                                </div>
                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>                                <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>




                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">University / College<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-9">
                                                                    <input type="text"  placeholder="Degree Title" name="college_name" required>
                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <!--  <div class="col-xs-3">

                                                                     <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload
                                                                     </a>

                                                                  </div>-->
                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>

                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Course Type / Passing Year<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-5">

                                                                    <select  id="degree_level_id" name="passing_year[]" required>
                                                                        <option value="" selected="selected">Select Course Type</option>
                                                                        <option value="part_time">Part Time</option>
                                                                        <option value="full_time">Full Time</option>
                                                                        <option value="coressponded">Coressponded</option>
                                                                    </select>

                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-4">
                                                                    <select  id="degree_type_id" name="passing_year[]">
                                                                        <option value="" selected="selected">Select Passing Year</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                    </select>

                                                                </div>
                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>



                                                </div>
                                                <!-- form-group -->
                                                <input type="button" name="add_itemEDU" value="Add More" onClick="addMoreEDU();" />
                                                <input type="button" name="del_item" value="Delete" onClick="deleteRow();" />



                                            </div><!-- Education Form Close -->


                                            <div id="Experience_Details" class="experience">
                                                <hr/>
                                                <h3 class="mgbt-xs-15">Experience Info</h3>
                                                <div style="text-align:right"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                                <SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
                                                <SCRIPT>
                                                    function addMoreExpe() {
                                                        $("<DIV>").load("inputExperience.php", function() {
                                                            $("#Experience").append($(this).html());
                                                        });
                                                    }
                                                    function deleteRow() {
                                                        $('DIV.product-item').each(function(index, item){
                                                            jQuery(':checkbox', this).each(function () {
                                                                if ($(this).is(':checked')) {
                                                                    $(item).remove();
                                                                }
                                                            });
                                                        });
                                                    }
                                                </SCRIPT>
                                                <div id="Experience">


                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Current Designation<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-9">

                                                                    <input type="text"  placeholder="Title / Role" name="current_designation" required>

                                                                </div>
                                                                <!-- col-xs-12 -->

                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>




                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Company<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-8">
                                                                    <input type="text"  placeholder="Company Name" name="company_name" required>
                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-3">

                                                                    <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload</a>

                                                                </div>
                                                                <!-- <div class="col-xs-2">
                                                                  <div class="btn-action">
                                                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                    <ul class="dropdown-menu pull-right">
                                                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                    </ul>
                                                                  </div>

                                                                </div> -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Location<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-9">
                                                                    <input type="text" id="datepicker-normal" placeholder="Company Location" name="company_location" required />
                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>

                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Experience<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-5">

                                                                    <input type="date"  placeholder="Starting Date" name="company_experience[]" required>

                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-4">
                                                                    <input type="date"  placeholder="Ending Date" name="company_experience[]" required>

                                                                </div>
                                                                <!-- col-xs-12
                                                <div class="col-xs-2">
                                                  <div class="btn-action">
                                                    <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                    <ul class="dropdown-menu pull-right">
                                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                    </ul>
                                                  </div>

                                                </div>
                   btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>



                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Anual Salary<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-9">
                                                                    <div class="col-xs-2">

                                                                        <select  id="curr" name="degree_type_id" name="annual_salary[]">
                                                                            <option value="" selected="selected">?</option>

                                                                            <option value="$">$</option>
                                                                            <option value="€">€</option>


                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        <select  id="degree_type_id" name="annual_salary[]" required><option value="" selected="selected">Lakhs</option>
                                                                            <option value="0">0</option>
                                                                            <option value="1 lakh">1 Lakh</option>
                                                                            <option value="2 lakh">2 Lakhs</option>
                                                                            <option value="3 lakh">3 Lakhs</option>
                                                                            <option value="4 lakh">4 Lakhs</option>
                                                                            <option value="5 lakh">5 Lakhs</option>
                                                                            <option value="6 lakh">6 Lakhs</option>
                                                                            <option value="7 lakh">7 Lakhs</option>
                                                                            <option value="8 lakh">8 Lakhs</option>
                                                                            <option value="9 lakh">9 Lakhs</option>
                                                                            <option value="10 lakh">10 Lakhs</option>
                                                                            <option value="11 lakh">11 Lakhs</option>

                                                                        </select>

                                                                    </div>

                                                                    <div class="col-xs-5">
                                                                        <select  id="degree_type_id" name="annual_salary[]"><option value="" selected="selected"> Thousand</option>
                                                                            <option value="0">0</option>
                                                                            <option value="10 Thousand ">10 Thousand</option>
                                                                            <option value="20 Thousand">20 Thousand</option>
                                                                            <option value="30 Thousand">30 Thousand</option>
                                                                            <option value="40 Thousand">40 Thousand</option>
                                                                            <option value="50 Thousand">50 Thousand</option>
                                                                            <option value="60 Thousand">60 Thousand</option>
                                                                            <option value="70 Thousand">70 Thousand</option>
                                                                            <option value="80 Thousand">80 Thousand</option>
                                                                            <option value="90 Thousand">90 Thousand</option>


                                                                        </select>

                                                                    </div>



                                                                </div>
                                                                <!-- col-xs-12 -->

                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>

                                                </div>


                                                <div class="form-group"  >
                                                    <label class="col-sm-3 control-label">Industry<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row mgbt-xs-0">
                                                            <div class="col-xs-9">
                                                                <div class="col-xs-12">

                                                                    <select  id="curr" name="industry" required>
                                                                        <option value="" selected="selected">Select the industry you work for</option>

                                                                        <option value="Industries">Industries</option>
                                                                        <option value="IT">IT</option>


                                                                    </select>
                                                                </div>



                                                            </div>
                                                            <!-- col-xs-12 -->

                                                            <!-- col-xs-12
                                                                          <div class="col-xs-2">
                                                                            <div class="btn-action">
                                                                              <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                              <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                              </ul>
                                                                            </div>

                                                                          </div>
                                             btn-action col-sm-10 -->
                                                        </div>
                                                        <!-- row -->
                                                    </div>
                                                    <!-- col-sm-10 -->
                                                </div>


                                                <div class="form-group"  >
                                                    <label class="col-sm-3 control-label">Funtional Area<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row mgbt-xs-0">
                                                            <div class="col-xs-9">
                                                                <div class="col-xs-12">

                                                                    <select  id="curr" name="functional_area" required>
                                                                        <option value="" selected="selected">Select the department you work in</option>

                                                                        <option value="manager">Manager</option>
                                                                        <option value="developer">Developer</option>


                                                                    </select>
                                                                </div>



                                                            </div>
                                                            <!-- col-xs-12 -->

                                                            <!-- col-xs-12
                                                                          <div class="col-xs-2">
                                                                            <div class="btn-action">
                                                                              <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                              <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                              </ul>
                                                                            </div>

                                                                          </div>
                                             btn-action col-sm-10 -->
                                                        </div>
                                                        <!-- row -->
                                                    </div>
                                                    <!-- col-sm-10 -->
                                                </div>

                                               {{-- <div class="form-group">

                                                    <label class="col-sm-3 control-label">Skills<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row mgbt-xs-0">
                                                            <div class="col-xs-9">

                                                                <div id="tags1584440712527_tagsinput" class="tagsinput" style="width: auto; height: 100px;">
                                                                    <span class="tag"><span>Java&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                                                                    <span class="tag"><span>PHP&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                                                    <span class="tag"><span>Database&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                                                    <span class="tag"><span>Design&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                                                                    <span class="tag"><span>UI & UX&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                                                                    <div id="tags1584440712527_addTag"><input id="tags1584440712527_tag" value="" data-default="add a tag" name="skills" style="color: rgb(102, 102, 102); width: 68px;"></div>
                                                                    <div class="tags_clear"></div>
                                                                </div>


                                                            </div>
                                                            <!-- col-xs-9 -->
                                                            <!-- col-xs-12
                                                                          <div class="col-xs-2">
                                                                            <div class="btn-action">
                                                                              <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                              <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                              </ul>
                                                                            </div>

                                                                          </div>
                                             btn-action col-sm-10 -->
                                                        </div>
                                                        <!-- row -->
                                                    </div>
                                                    <!-- col-sm-10 -->
                                                </div>--}}

                                                <div class="form-group"  >
                                                    <label class="col-sm-3 control-label">Discription<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row mgbt-xs-0">
                                                            <div class="col-xs-9">

                                                                <textarea rows="3" type="text" placeholder="Job Discription" name="discription" required></textarea>

                                                            </div>
                                                            <!-- col-xs-12 -->

                                                            <!-- col-xs-12
                                                                          <div class="col-xs-2">
                                                                            <div class="btn-action">
                                                                              <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                              <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                              </ul>
                                                                            </div>

                                                                          </div>
                                             btn-action col-sm-10 -->
                                                        </div>
                                                        <!-- row -->
                                                    </div>
                                                    <!-- col-sm-10 -->
                                                </div>
                                                <!-- form-group -->
                                                <input type="button" name="add_itemExpe" value="Add More" onClick="addMoreExpe();" />
                                                <input type="button" name="del_item" value="Delete" onClick="deleteRow();" />



                                            </div>
                                            <div id="Experience_Details">
                                                <hr/>
                                                <h3 class="mgbt-xs-15">Project (if any)</h3>
                                                <input type="hidden" name="project">
                                                <div style="text-align:right"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                                <SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
                                                <SCRIPT>
                                                    function addMoreExpe() {
                                                        $("<DIV>").load("inputExperience.php", function() {
                                                            $("#Experience").append($(this).html());
                                                        });
                                                    }
                                                    function deleteRow() {
                                                        $('DIV.product-item').each(function(index, item){
                                                            jQuery(':checkbox', this).each(function () {
                                                                if ($(this).is(':checked')) {
                                                                    $(item).remove();
                                                                }
                                                            });
                                                        });
                                                    }
                                                </SCRIPT>
                                                <div id="Experience">


                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Project</label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-5">

                                                                    <input type="text"  placeholder="Client Name" name="project_name">

                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-4">
                                                                    <input type="text"  placeholder="Year" name="project_year">

                                                                </div>
                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>




                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Client</label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-9">
                                                                    <input type="text"  placeholder="Client / company name" name="client_name">
                                                                </div>
                                                                <!-- col-xs-12 -->

                                                                <!-- col-xs-12
                                                                              <div class="col-xs-2">
                                                                                <div class="btn-action">
                                                                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                  <ul class="dropdown-menu pull-right">
                                                                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                  </ul>
                                                                                </div>

                                                                              </div>
                                                 btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>




                                                    <div class="form-group"  >
                                                        <label class="col-sm-3 control-label">Discription</label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-9">

                                                                    <textarea rows="3" placeholder="Project Discription" name="client_description"></textarea>

                                                                </div>
                                                                <!-- col-xs-12 -->

                                                                <!-- col-xs-12
                                                    <div class="col-xs-2">
                                                      <div class="btn-action">
                                                        <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                        <ul class="dropdown-menu pull-right">
                                                          <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                          <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                          <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                        </ul>
                                                      </div>

                                                    </div>
                       btn-action col-sm-10 -->
                                                            </div>
                                                            <!-- row -->
                                                        </div>
                                                        <!-- col-sm-10 -->
                                                    </div>

                                                </div>
                                                <!-- form-group -->
                                                <input type="button" name="add_itemExpe" value="Add More" onClick="addMoreExpe();" />
                                                <input type="button" name="del_item" value="Delete" onClick="deleteRow();" />


                                                <hr>



                                            </div>
                                            <!-- col-sm-12 complete form close -->
                                        </div>
                                            <div class="pd-20" style="text-align: center;">
                                                <button type="submit" class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Update</button>
                                            </div>


                                        <!-- row -->

                                    </div>
                                    <!-- panel-body -->

                                </div>
                            </form>
                        </div>
                        <!-- Panel Widget -->
                    </div>
                    <!-- col-sm-12-->
                </div>
                <!-- row -->

            </div>
            {{--<div class="vd_content-section clearfix">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel widget light-widget">
                            <div class="panel-heading no-title"> </div>--}}
                            <form class="form-horizontal"  action="{{route('web.job.personalInfo')}}" method="post" enctype="multipart/form-data" >
                                {{csrf_field()}}
                                <div  class="panel-body form-horizontal">
                                    <div class="row">
                                        <!-- Modal -->
                                        <div class="modal fade col-md-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style=" height: 800px" >
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header vd_bg-blue vd_white">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                        <h4 class="modal-title" id="myModalLabel">Documents Upload</h4>
                                                    </div>
                                                    <div class="modal-body" style="overflow-y: scroll; height: 800px"  data-rel="scroll" data-scrollheight="600">
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
                                                                        <p>Personal<br> Documents</p>
                                                                    </div>
                                                                    <div class="stepwizard-step">
                                                                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                                                        <p>Educational <br>Documents</p>
                                                                    </div>
                                                                    <div class="stepwizard-step">
                                                                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                                                        <p> Professional<br> Documents</p>
                                                                    </div>
                                                                    <div class="stepwizard-step">
                                                                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                                                        <p>Certification <br>Documents</p>
                                                                    </div>

                                                                    <div class="stepwizard-step">
                                                                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                                                        <p>Projects</p>
                                                                    </div>


                                                                    <div class="stepwizard-step">
                                                                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                                                                        <p>Official <br>Verification</p>
                                                                    </div>



                                                                </div>
                                                            </div>


                                                                <div class="row setup-content" id="step-1">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-md-12">
                                                                            <h3> Personal Documents</h3>
                                                                            <form class="form-horizontal">


                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Citizen</label>
                                                                                    <div class="">



                                                                                        <div class="col-xs-4">

                                                                                            <select  id="degree_type_id" class="form-control" style="width:100%" name="citizen">
                                                                                                <option value="" selected="selected">Citizen </option>
                                                                                                <option value="1">India</option>
                                                                                                <option value="2">America</option>
                                                                                                <option value="3">Australia</option>
                                                                                                <option value="3">Canada</option>


                                                                                            </select>



                                                                                        </div>

                                                                                        <!-- col-xs-12 -->
                                                                                        <div class="col-xs-4">

                                                                                        </div>

                                                                                    </div>

                                                                                </div>



                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Citizenship Proof</label>
                                                                                    <div class="col-sm-6 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">Citizenship Proof </option>
                                                                                            <option value="1">Aadhaar  Card</option>
                                                                                            <option value="2">Passport</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3 " id="icon-file" >
                                                                                        <i class="fa fa-cloud-upload append-icon"><input id="image" type="file" name="citizenship_proof" style="display: none;"></i> Upload</a>
                                                                                </div>



                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Current Address</label>
                                                                                    <div class="col-sm-9 controls">


                                                                                        <textarea rows="3"  class="form-control" placeholder="Current Address" name="current_address"></textarea>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Permanent Address</label>
                                                                                    <div class="col-sm-9 controls">


                                                                                        <textarea rows="3"  class="form-control" placeholder="Permanent Address" name="permanent_address"></textarea>
                                                                                    </div>

                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Address Proof</label>
                                                                                    <div class="col-sm-6 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">Address Proof </option>
                                                                                            <option value="1">Voter ID</option>
                                                                                            <option value="2">Ration Card</option>
                                                                                            <option value="2">Electricity Bill</option>
                                                                                            <option value="1">Aadhaar  Card</option>
                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3 " id="icon-file1"><i class="fa fa-cloud-upload append-icon">
                                                                                            <input type="file" name="address_proof" id="image1" style="display: none;"></i> Upload</a>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">ID  Proof</label>
                                                                                    <div class="col-sm-6 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">ID  Proof </option>
                                                                                            <option value="1">Pan Card</option>
                                                                                            <option value="2">Driving License</option>
                                                                                            <option value="2">Passport</option>
                                                                                            <option value="1">Aadhaar  Card</option>
                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3 " id="icon-file2">
                                                                                        <i  class="fa fa-cloud-upload append-icon ">
                                                                                            <input type="file" name="id_proof" id="image2" style="display: none;">  Upload</i> </a>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Number Of Family Member</label>
                                                                                    <div class="col-sm-9 controls">
                                                                                        <input class="form-control" type="text" placeholder="Number Of Family Member (including you)" name="family_member">
                                                                                    </div>

                                                                                </div>


                                                                            </form>
                                                                            <div class="col-md-12" style="text-align: center;">
                                                                                <br><br>               <button class="btn btn-primary nextBtn btn-lg pull-center" type="button" >Next</button> <br><br>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row setup-content" id="step-2">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-md-12">
                                                                            <h3> Educational Details</h3><br>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">College Name / University Name</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <input class="form-control" type="text" placeholder="College Name / University Name" name="college_name">
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Acadamic Session</label>
                                                                                <div class="col-sm-3 controls">
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" name="acadamic_session[]"><option value="" selected="selected"> Starting Year </option>
                                                                                        <option value="1">2020</option>
                                                                                        <option value="2">2019</option>
                                                                                        <option value="2">2018</option>
                                                                                        <option value="2">2017</option>
                                                                                        <option value="2">2016</option>
                                                                                        <option value="2">2015</option>
                                                                                        <option value="2">2014</option>
                                                                                        <option value="2">2013</option>
                                                                                        <option value="2">2012</option>
                                                                                        <option value="2">2011</option>
                                                                                        <option value="2">2010</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-sm-3 controls">
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" name="acadamic_session[]"><option value="" selected="selected"> Ending Year </option>
                                                                                        <option value="1">2020</option>
                                                                                        <option value="2">2019</option>
                                                                                        <option value="2">2018</option>
                                                                                        <option value="2">2017</option>
                                                                                        <option value="2">2016</option>
                                                                                        <option value="2">2015</option>
                                                                                        <option value="2">2014</option>
                                                                                        <option value="2">2013</option>
                                                                                        <option value="2">2012</option>
                                                                                        <option value="2">2011</option>
                                                                                        <option value="2">2010</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Documents 1</label>
                                                                                <div class="col-sm-4 controls">
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">Type Of Documents </option>
                                                                                        <option value="1">Individual Certificate</option>
                                                                                        <option value="2">Consolidated Memo</option>
                                                                                        <option value="2">Convocation</option>
                                                                                    </select>

                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file4" ><i class="fa fa-cloud-upload append-icon">
                                                                                        <input id="image4" name="document_1" type="file" style="display: none;"></i> Upload</a>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Documents 2</label>
                                                                                <div class="col-sm-4 controls">
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">Type Of Documents </option>
                                                                                        <option value="1">Individual Certificate</option>
                                                                                        <option value="2">Consolidated Memo</option>
                                                                                        <option value="2">Convocation</option>
                                                                                    </select>

                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file5" ><i class="fa fa-cloud-upload append-icon">
                                                                                        <input id="image5" name="document_2" type="file" style="display: none;"></i> Upload</a></div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Documents 3</label>
                                                                                <div class="col-sm-4 controls">
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">Type Of Documents </option>
                                                                                        <option value="1">Individual Certificate</option>
                                                                                        <option value="2">Consolidated Memo</option>
                                                                                        <option value="2">Convocation</option>
                                                                                    </select>

                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " id="icon-file6" ><i class="fa fa-cloud-upload append-icon">
                                                                                        <input id="image6" name="document_3" type="file" style="display: none;"></i> Upload</a>                                                                            </div>


                                                                            <div class="col-md-12" style="text-align: center;">
                                                                                <br><br>   <button class="btn btn-primary nextBtn btn-lg pull-center" type="button" >Next</button> <br><br>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row setup-content" id="step-3">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-md-12">
                                                                            <h3> Professional Details</h3>
                                                                            <br><br>

                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Title</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <input class="form-control" name="professional_title" type="text" placeholder="Title">
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Company Name</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <input class="form-control" type="text" name="company_name" placeholder="Company Name">
                                                                                </div>

                                                                            </div>


                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Duration</label>
                                                                                <div class="col-sm-7 controls">

                                                                                    <div class="col-sm-6 controls">
                                                                                        <input class="form-control" type="text" name="duration[]" placeholder="Joining Date">
                                                                                    </div>



                                                                                    <div class="col-sm-1 controls">
                                                                                        To
                                                                                    </div>
                                                                                    <div class="col-sm-5 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="duration[]">
                                                                                            <option value="" selected="selected">Now </option>
                                                                                            <option value="1">Date </option>


                                                                                        </select>

                                                                                    </div>


                                                                                </div>


                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Offer letter / Appointment letter</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Offer letter </option>
                                                                                            <option value="2">Appointment letter</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file7" ><i class="fa fa-cloud-upload append-icon">
                                                                                            <input id="image7" name="offer_letter" type="file" style="display: none;"></i> Upload</a>

                                                                                </div>

                                                                            </div>


                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Relieving letter / Experience letter</label>
                                                                                <div class="col-sm-7 controls">


                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Relieving letter </option>
                                                                                            <option value="2">Experience letter</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file8" ><i class="fa fa-cloud-upload append-icon">
                                                                                            <input id="image8" name="experience_letter" type="file" style="display: none;"></i> Upload</a>

                                                                                </div>

                                                                            </div>


                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Designation change letter / Promotion letter</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%"><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Designation change letter </option>
                                                                                            <option value="2">Promotion letter</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file9" ><i class="fa fa-cloud-upload append-icon">
                                                                                            <input id="image9"  name="promotion_letter" type="file" style="display: none;"></i> Upload</a>

                                                                                </div>

                                                                            </div>

                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Salary Slip / Bank Statement</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" ><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Salary Slip  </option>
                                                                                            <option value="2">Bank Statement</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file10" ><i class="fa fa-cloud-upload append-icon">
                                                                                            <input id="image10" name="salary_slip" type="file" style="display: none;"></i> Upload</a>

                                                                                </div>

                                                                            </div>

                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Reference letter / Referral letter</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%"><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Reference letter   </option>
                                                                                            <option value="2">Referral letter</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file11" ><i class="fa fa-cloud-upload append-icon">
                                                                                            <input id="image11" name="referece_letter" type="file" style="display: none;"></i> Upload</a>
                                                                                </div>

                                                                            </div>

                                                                            <br>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Roles and Responsibilities</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <textarea rows="5"  class="form-control" placeholder="Describe about your roles and explain " name="roles_permission"></textarea>
                                                                                </div>

                                                                            </div>



                                                                            <div class="col-md-12" style="text-align: center;">
                                                                                <br><br>               <button class="btn btn-primary nextBtn btn-lg pull-center" type="button" >Next</button> <br><br>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row setup-content" id="step-4">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-md-12">
                                                                            <h3> Certification</h3>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification">
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file12" ><i class="fa fa-cloud-upload append-icon">
                                                                                        <input id="image12" name="certification1" type="file" style="display: none;"></i> Upload</a>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification" >
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file13" ><i class="fa fa-cloud-upload append-icon">
                                                                                        <input id="image13" name="certification2" type="file" style="display: none;"></i> Upload</a>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification" >
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file14" ><i class="fa fa-cloud-upload append-icon">
                                                                                        <input id="image14" type="file" name="certification3" style="display: none;"></i> Upload</a>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification">
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file15" ><i class="fa fa-cloud-upload append-icon">
                                                                                        <input id="image15" type="file" name="certification4" style="display: none;"></i> Upload</a>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification" >
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file16" ><i class="fa fa-cloud-upload append-icon">
                                                                                        <input id="image16" name="certification5" type="file" style="display: none;"></i> Upload</a>
                                                                            </div>

                                                                            <div class="col-md-12" style="text-align: center;">
                                                                                <br><br>

                                                                                <div class="col-md-12" style="text-align: center;">
                                                                                    <br><br>               <button class="btn btn-primary nextBtn btn-lg pull-center" type="button" >Next</button> <br><br>

                                                                                </div>


                                                                                <br><br>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="row setup-content" id="step-5">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-md-12">
                                                                            <h3> Projects</h3>

                                                                            <div class="form-group"  >
                                                                                <label class="col-sm-3 control-label">Project</label>
                                                                                <div class="col-sm-9 controls">
                                                                                    <div class="row mgbt-xs-0">
                                                                                        <div class="col-xs-5">

                                                                                            <input type="text"  placeholder="Client Name" name="client_name[]">

                                                                                        </div>
                                                                                        <!-- col-xs-12 -->
                                                                                        <div class="col-xs-4">
                                                                                            <input type="text"  placeholder="Year" name="client_name[]">

                                                                                        </div>
                                                                                        <div class="col-xs-2">

                                                                                            <!-- btn-action col-sm-10 -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- row -->
                                                                                </div>
                                                                                <!-- col-sm-10 -->
                                                                            </div>




                                                                            <div class="form-group"  >
                                                                                <label class="col-sm-3 control-label">Client</label>
                                                                                <div class="col-sm-9 controls">
                                                                                    <div class="row mgbt-xs-0">
                                                                                        <div class="col-xs-9">
                                                                                            <input type="text"  placeholder="Client / company name" name="client_name">
                                                                                        </div>
                                                                                        <!-- col-xs-12 -->

                                                                                        <div class="col-xs-2">


                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- row -->
                                                                                </div>
                                                                                <!-- col-sm-10 -->
                                                                            </div>

                                                                            <div class="form-group"  >
                                                                                <label class="col-sm-3 control-label">Duration</label>
                                                                                <div class="col-sm-9 controls">
                                                                                    <div class="row mgbt-xs-0">
                                                                                        <div class="col-xs-4">

                                                                                            <select  id="degree_level_id" name="duration[]">
                                                                                                <option value="" selected="selected">Years</option><option value="1">0 Year</option><option value="2">1 Year</option><option value="3">2 Years</option><option value="4">3 Years</option><option value="5">4 Years</option><option value="6">5 Years</option><option value="7">6 Years</option><option value="8">7 Years</option><option value="9">8 Years</option><option value="10">9 Years</option><option value="10">10+ Years</option></select>

                                                                                        </div>

                                                                                        <!-- col-xs-12 -->
                                                                                        <div class="col-xs-4">
                                                                                            <select  id="degree_type_id" name="duration[]"><option value="" selected="selected">Months</option>
                                                                                                <option value="1">0</option>
                                                                                                <option value="2">1 Month</option>
                                                                                                <option value="3">2 Months</option>
                                                                                                <option value="4">3 Months</option>
                                                                                                <option value="5">4 Months</option>
                                                                                                <option value="6">5 Months</option>
                                                                                                <option value="7">6 Months</option>
                                                                                                <option value="8">7 Months</option>
                                                                                                <option value="9">8 Months</option>
                                                                                                <option value="10">9 Months</option>
                                                                                                <option value="11">10 Months</option>
                                                                                                <option value="11">11 Months</option>

                                                                                            </select>

                                                                                        </div>
                                                                                        <div class="col-xs-1">
                                                                                        </div>
                                                                                        <div class="col-xs-2">

                                                                                            <!-- btn-action col-sm-10 -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- row -->
                                                                                </div>
                                                                                <!-- col-sm-10 -->
                                                                            </div>
                                                                            <div class="form-group"  >
                                                                                <label class="col-sm-3 control-label">Project Type</label>
                                                                                <div class="col-sm-9 controls">
                                                                                    <div class="row mgbt-xs-0">
                                                                                        <div class="col-xs-9">

                                                                                            <select  id="degree_level_id" name="project_type"><option value="" selected="selected">Select Project Type</option>
                                                                                                <option value="5">Recruitment</option>
                                                                                                <option value="3">Counselling</option>
                                                                                                <option value="2">Teaching & Training</option>
                                                                                                <option value="1">Consultation</option>
                                                                                                <option value="5">Software engineers</option>
                                                                                                <option value="4">Wedding planners</option>
                                                                                                <option value="3">Psychologists</option>
                                                                                                <option value="2">Yoga trainers</option>
                                                                                                <option value="1">Actors/models</option>
                                                                                                <option value="5">Tattoo/piercing artists</option>
                                                                                                <option value="4">Home salon stylists</option>
                                                                                                <option value="3">Video and video editing</option>
                                                                                                <option value="2">Animation, including 3-D animation</option>
                                                                                                <option value="1">Photography</option>
                                                                                                <option value="5">Music composing and mixing</option>
                                                                                                <option value="4">Astrology</option>
                                                                                                <option value="3">Software development</option>
                                                                                                <option value="2">Design</option>
                                                                                                <option value="1">Sales and marketing</option>
                                                                                                <option value="5">Sales and marketing</option>
                                                                                                <option value="4">Finance and accounting</option>
                                                                                                <option value="3">Mobile applications admin</option>
                                                                                                <option value="2">Data entry and more</option>
                                                                                                <option value="1">Healing</option>
                                                                                                <option value="1">Anchors</option>

                                                                                            </select>



                                                                                        </div>
                                                                                        <!-- col-xs-12 -->

                                                                                        <div class="col-xs-2">

                                                                                            <!-- btn-action col-sm-10 -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- row -->
                                                                                </div>
                                                                                <!-- col-sm-10 -->
                                                                            </div>
                                                                            <div class="form-group"  >
                                                                                <label class="col-sm-3 control-label">Project link / Document</label>
                                                                                <div class="col-sm-9 controls">
                                                                                    <div class="row mgbt-xs-0">
                                                                                        <div class="col-xs-8">
                                                                                            <input type="text"  placeholder="Type here  Or Upload Document" >
                                                                                        </div>
                                                                                        <!-- col-xs-12 -->
                                                                                        <div class="col-xs-3">

                                                                                            <a class="btn vd_btn  vd_bg-blue  col-sm-3  " id="icon-file17" ><i class="fa fa-cloud-upload append-icon">
                                                                                                    <input id="image17" name="project_document" type="file" style="display: none;"></i> Upload</a>

                                                                                        </div>
                                                                                        <!-- <div class="col-xs-2">
                                                                                          <div class="btn-action">
                                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                                            <ul class="dropdown-menu pull-right">
                                                                                              <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                              <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                              <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                                            </ul>
                                                                                          </div>

                                                                                        </div> -->
                                                                                    </div>
                                                                                    <!-- row -->
                                                                                </div>
                                                                                <!-- col-sm-10 -->
                                                                            </div>
                                                                            <div class="form-group"  >
                                                                                <label class="col-sm-3 control-label">Discription</label>
                                                                                <div class="col-sm-9 controls">
                                                                                    <div class="row mgbt-xs-0">
                                                                                        <div class="col-xs-9">

                                                                                            <textarea rows="3" placeholder="Project Discription" name="description"></textarea>

                                                                                        </div>
                                                                                        <!-- col-xs-12 -->

                                                                                        <div class="col-xs-2">

                                                                                            <!-- btn-action col-sm-10 -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- row -->
                                                                                </div>
                                                                                <!-- col-sm-10 -->
                                                                            </div>




                                                                            <div class="col-md-12" style="text-align: center;">
                                                                                <br><br>               <button class="btn btn-primary nextBtn btn-lg pull-center" type="button" >Next</button> <br><br>

                                                                            </div>



                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="row setup-content" id="step-6">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-md-12">
                                                                            <h3> Official Verification</h3>
                                                                            {{-- <div style="text-align: left;">
                                                                                 <h4>Personal   <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>
                                                                                 <h4> Educational Documents <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>
                                                                                 <h4> Professional Documents <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>
                                                                                 <h4> Certification <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>
                                                                                 <h4> Projects <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>

                                                                             </div>--}}



                                                                            <div class="col-md-12" style="text-align: center;">
                                                                                <br><br>

                                                                                <button class="btn btn-success btn-lg"  {{--onclick="getPersonalData()"--}} type="submit">Finish!</button>



                                                                                <br><br>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                        </div>




                                                        <script>

                                                            $(document).ready(function () {

                                                                var navListItems = $('div.setup-panel div a'),
                                                                        allWells = $('.setup-content'),
                                                                        allNextBtn = $('.nextBtn');

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

                                                                allNextBtn.click(function(){
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
                                                                });

                                                                $('div.setup-panel div a.btn-primary').trigger('click');
                                                            });

                                                        </script>

                                                        <!--  real form -->

                                                        <!--                         	<form class="form-horizontal">


                                                                                                                <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Title</label>
                                                                                      <div class="col-sm-7 controls">
                                                                                        <input class="form-control" type="text" placeholder="Designation">
                                                                                      </div>

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Experience</label>
                                                                                      <div class="col-sm-7 controls">



                                                                                             <div class="col-xs-6">

                                                                                            <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Years</option><opti748on value="1">0 Year</option><option value="2">1 Year</option><option value="3">2 Years</option><option value="4">3 Years</option><option value="5">4 Years</option><option value="6">5 Years</option><option value="7">6 Years</option><option value="8">7 Years</option><option value="9">8 Years</option><option value="10">9 Years</option><option value="10">10+ Years</option></select>

                                                                                          </div>


                                                                                          <div class="col-xs-6">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Months</option>
                                                                                            <option value="1">0</option>
                                                                                            <option value="2">1 Month</option>
                                                                                            <option value="3">2 Months</option>
                                                                                            <option value="4">3 Months</option>
                                                                                            <option value="5">4 Months</option>
                                                                                            <option value="6">5 Months</option>
                                                                                            <option value="7">6 Months</option>
                                                                                            <option value="8">7 Months</option>
                                                                                            <option value="9">8 Months</option>
                                                                                            <option value="10">9 Months</option>
                                                                                            <option value="11">10 Months</option>
                                                                                            <option value="11">11 Months</option>

                                                                                            </select>

                                                                                          </div>

                                                                                      </div>

                                                                                    </div>

                                                                                   <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Salary</label>
                                                                                      <div class="col-sm-7 controls">






                                                                                    <div class="col-xs-6">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Lakhs</option>
                                                                                            <option value="1">0</option>
                                                                                            <option value="2">1 Lakh</option>
                                                                                            <option value="3">2 Lakhs</option>
                                                                                            <option value="4">3 Lakhs</option>
                                                                                            <option value="5">4 Lakhs</option>
                                                                                            <option value="6">5 Lakhs</option>
                                                                                            <option value="7">6 Lakhs</option>
                                                                                            <option value="8">7 Lakhs</option>
                                                                                            <option value="9">8 Lakhs</option>
                                                                                            <option value="10">9 Lakhs</option>
                                                                                            <option value="11">10 Lakhs</option>
                                                                                            <option value="11">11 Lakhs</option>

                                                                                            </select>

                                                                                          </div>

                                                                                          <div class="col-xs-6">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected"> Thousand</option>
                                                                                            <option value="1">0</option>
                                                                                            <option value="2">10 Thousand</option>
                                                                                            <option value="3">20 Thousand</option>
                                                                                            <option value="4">30 Thousand</option>
                                                                                            <option value="5">40 Thousand</option>
                                                                                            <option value="6">50 Thousand</option>
                                                                                            <option value="7">60 Thousand</option>
                                                                                            <option value="8">70 Thousand</option>
                                                                                            <option value="9">80 Thousand</option>
                                                                                            <option value="10">90 Thousand</option>


                                                                                            </select>

                                                                                          </div>

                                                                                      </div>

                                                                                    </div>


                                                                                                                                            <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Number of positions</label>
                                                                                      <div class="col-sm-7 controls">
                                                                                        <input class="form-control" type="text" placeholder="Number of positions">
                                                                                      </div>

                                                                                    </div>


                                                                                                                                                                        <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Qualification</label>
                                                                                      <div class="col-sm-7 controls">
                                                                                          <div class="col-xs-12">

                                                                                            <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Highest Qualification</option>
                                                                                            <option value="5">Doctorate/PhD</option>
                                                                                            <option value="4">Post Graduation</option>
                                                                                            <option value="3">Graduation</option>
                                                                                            <option value="2">12th/O-Level</option>
                                                                                            <option value="1">10th</option>

                                                                                            </select>



                                                                                          </div>


                                                                                      </div>

                                                                                    </div>



                                                                                                 <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Domain</label>
                                                                                      <div class="col-sm-7 controls">






                                                                                    <div class="col-xs-12">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Domain</option>
                                                                                            <option value="1">IT</option>
                                                                                            <option value="2">Non IT</option>


                                                                                            </select>

                                                                                          </div>


                                                                                      </div>

                                                                                    </div>

                                                                                                                             <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Functional Area</label>
                                                                                      <div class="col-sm-7 controls">






                                                                                    <div class="col-xs-12">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select functional Area</option>
                                                                                            <option value="1">Manager</option>
                                                                                            <option value="2">Marketing</option>


                                                                                            </select>

                                                                                          </div>


                                                                                      </div>

                                                                                    </div>
                                                                                                                             <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Skills</label>
                                                                                      <div class="col-sm-7 controls">






                                                                                    <div class="col-xs-12">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Skill</option>
                                                                                            <option value="1">Java</option>
                                                                                            <option value="2">Sales</option>


                                                                                            </select>

                                                                                          </div>


                                                                                      </div>

                                                                                    </div>


                                                                                                                                                         <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Gender</label>
                                                                                      <div class="col-sm-7 controls">






                                                                                    <div class="col-xs-12">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Gender</option>
                                                                                            <option value="1">Male</option>
                                                                                            <option value="2">Female</option>
                                                                                            <option value="2">Any</option>

                                                                                            </select>

                                                                                          </div>


                                                                                      </div>

                                                                                    </div>
                                                         <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Interview Type</label>
                                                                                      <div class="col-sm-7 controls">






                                                                                    <div class="col-xs-12">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Interview Type</option>
                                                                                            <option value="1">Walk In</option>
                                                                                            <option value="2">Third Party</option>
                                                                                            <option value="2">Affiliate</option>

                                                                                            </select>

                                                                                          </div>


                                                                                      </div>

                                                                                    </div>



                                                                                                         <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Job Summary</label>
                                                                                      <div class="col-sm-7 controls">


                                                                                                                      <textarea rows="3"  class="form-control" placeholder="Job Summary"></textarea>
                                                                                      </div>

                                                                                    </div>

                                                                                                                                     <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Job Description</label>
                                                                                      <div class="col-sm-7 controls">


                                                                                                                      <textarea rows="3"  class="form-control" placeholder="Job Description" ></textarea>
                                                                                      </div>

                                                                                    </div>


                                                                                    <hr>
                                                                                    <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Contact No</label>
                                                                                      <div class="col-sm-7 controls">
                                                                                        <input class="form-control" type="text" placeholder="Contact No">
                                                                                      </div>

                                                                                    </div>

                                                                                                                <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Email</label>
                                                                                      <div class="col-sm-7 controls">
                                                                                        <input class="form-control" type="text" placeholder="Email">
                                                                                      </div>

                                                                                    </div>

                                                                                     <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Schedule Post</label>
                                                                                      <div class="col-sm-7 controls">






                                                                                    <div class="col-xs-12">
                                                                                            <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Schedule Post</option>
                                                                                            <option value="1">Now</option>
                                                                                            <option value="2">Date</option>


                                                                                            </select>

                                                                                          </div>


                                                                                      </div>

                                                                                    </div>
                                                           <div class="form-group">
                                                                                      <label class="col-sm-4 control-label">Search String</label>
                                                                                      <div class="col-sm-7 controls">
                                                                                        <input class="form-control" type="text" placeholder="Search String">
                                                                                      </div>

                                                                                    </div>

                                                                                       <div class="form-group">
                                                                                                                     <div class="col-sm-4 controls">

                                                                                      </div>


                                                                                      <div class="col-sm-7 controls">
                                                                                        <input class="form-control" type="text" placeholder="#tag connection">
                                                                                      </div>

                                                                                    </div>
                                                                                       <div class="form-group">
                                                                                                                     <div class="col-sm-4 controls">

                                                                                      </div>

                                                                                      <div class="col-sm-7 controls">
                                                                                        <input class="form-control" type="text" placeholder="#tag group">
                                                                                      </div>

                                                                                    </div>



                                                                                  </form>
                                                                                 -->
                                                    </div>
                                                    <div class="modal-footer background-login">
                                                        <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn vd_btn vd_bg-green">Save changes</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->


                                        <!-- row -->

                                    </div>
                                    <!-- panel-body -->

                                </div>
                            </form>
                        {{--</div>--}}
                        <!-- Panel Widget -->
                   {{-- </div>--}}
                    <!-- col-sm-12-->
               {{-- </div>--}}
                <!-- row -->

           {{-- </div>--}}
            <!-- .vd_content-section -->

        </div>
        <!-- .vd_content -->
    </div>
    <!-- .vd_container -->
</div>

<style>
    /*.experience{
        display:none;
    }*/
</style>

<script>
    $('select[id="experience"]').on( "click", function() {
        console.log('experience');
        $('.experience').removeClass('experience');
    });


    $(".icon-file").click(function(){
        //console.log("yes2");
        $('.image').trigger('click');
    });


    $("#icon-file").click(function(){

        $('#image').trigger('click');
    });
    $("#icon-file1").click(function(){

        $('#image1').trigger('click');
    });
    $("#icon-file2").click(function(){

        $('#image2').trigger('click');
    });
    $("#icon-file3").click(function(){

        $('#image3').trigger('click');
    });
    $("#icon-file4").click(function(){

        $('#image4').trigger('click');
    });
    $("#icon-file5").click(function(){

        $('#image5').trigger('click');
    });
    $("#icon-file6").click(function(){

        $('#image6').trigger('click');
    });
    $("#icon-file7").click(function(){

        $('#image7').trigger('click');
    });
    $("#icon-file8").click(function(){

        $('#image8').trigger('click');
    });
    $("#icon-file9").click(function(){

        $('#image9').trigger('click');
    });
    $("#icon-file10").click(function(){

        $('#image10').trigger('click');
    });
    $("#icon-file11").click(function(){

        $('#image11').trigger('click');
    });
    $("#icon-file12").click(function(){

        $('#image12').trigger('click');
    });
    $("#icon-file13").click(function(){

        $('#image13').trigger('click');
    });
    $("#icon-file14").click(function(){

        $('#image14').trigger('click');
    });
    $("#icon-file15").click(function(){

        $('#image15').trigger('click');
    });
    $("#icon-file16").click(function(){

        $('#image16').trigger('click');
    });
    $("#icon-file17").click(function(){

        $('#image17').trigger('click');
    });
    $("#icon-file18").click(function(){

        $('#image18').trigger('click');
    });



    function getPersonalData()
    {
        if($('#personal_data').valid()){

            var registerForm = $('#form_register').serialize();
            console.log(registerForm);
            $.ajax({
                type:'POST',
                header:{
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                url:"/ajaxRegister",
                data:registerForm,
                dataType:'json',
                success:function(response)
                {
                    //alert(response.msg);
                    location.reload(response);
                },
                error:function(error)
                {
                    //alert(error);
                }
            });
        }
        else{
            /*alert('Error in form data')*/
        }
    }

</script>
@include('web.template.CRM.job.include.footer')