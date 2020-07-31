<?php
include_once('header.php');
?>

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
                <form class="form-horizontal" action="#" role="form">
                  <div  class="panel-body">
                    <h2 class="mgbt-xs-20"> Profile: <span class="font-semibold">Mariah Carayban</span> </h2>
                    <br/>
                    <div class="row">
                      <div class="col-sm-3 mgbt-xs-20">
                        <div class="form-group">
                          <div class="col-xs-12">
                            <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="img/avatar/big.jpg"> </div>
                            <div class="form-img-action text-center mgbt-xs-20"> <a class="btn vd_btn  vd_bg-blue" href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a> </div>
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
                                    <td><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i></td>
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
                        <h3 class="mgbt-xs-15">Account Setting</h3>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="email"  placeholder="email@yourcompany.com">
                              </div>
                              <!-- col-xs-12 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Username</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text"  placeholder="username">
                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 

                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Password</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="password" class="width-40"  placeholder="password">
                              </div>
                              <!-- col-xs-12 --> 
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Confirm Password</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="password" class="width-40"  placeholder="password">
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
                        <div class="form-group">
                          <label class="col-sm-3 control-label">First Name</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text"  placeholder="First name as per documents">
                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Last Name</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text" placeholder="Last name as per documents">
                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-lock fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Gender</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <span class="vd_radio radio-info">
                                  <input type="radio" checked="" value="option3" id="optionsRadios3" name="optionsRadios2">
                                  <label for="optionsRadios3"> Male </label>
                                </span>
                                <span class="vd_radio  radio-danger" > 

                                  <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios2">
                                  <label for="optionsRadios4"> Female </label>
                                </span> 


                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-lock fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Birthday</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text" id="datepicker-normal" class="width-40" />
                              </div>
                              <!-- col-xs-12 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->
                                                <div class="form-group">
                          <label class="col-sm-3 control-label">Location</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text" id="datepicker-normal" class="width-40" />
                              </div>
                              <!-- col-xs-12 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Marital Status</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <select class="width-40">
                                  <option>Single</option>
                                  <option>Married</option>
                                  <option>Divorced</option>
                                  <option>Widow</option>
                                </select>
                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                              </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Position</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <select class="width-40">
                                  <option>Freshers</option>
                                  <option>Experienced</option>

                                  <option>CEO</option>
                                  <option>Director</option>
                                  <option>Manager</option>
                                  <option>Staff</option>
                                  <option>Office Boy</option>
                                </select>
                              </div>
                              <!-- col-xs-12 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->
                         <div class="form-group"  >
                              <label class="col-sm-3 control-label">Total Exp.</label>
                              <div class="col-sm-9 controls">
                                <div class="row mgbt-xs-0">
                                  <div class="col-xs-4">

                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Years</option><opti748on value="1">0 Year</option><option value="2">1 Year</option><option value="3">2 Years</option><option value="4">3 Years</option><option value="5">4 Years</option><option value="6">5 Years</option><option value="7">6 Years</option><option value="8">7 Years</option><option value="9">8 Years</option><option value="10">9 Years</option><option value="10">10+ Years</option></select>

                                  </div>

                                  <!-- col-xs-12 -->
                                  <div class="col-xs-4">
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
                                                                    <div class="col-xs-1">
                                      </div>
                                  <div class="col-xs-2">
                                    <div class="btn-action">
                                      <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                      <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                        <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                      </ul>
                                    </div>
                                    <!-- btn-action col-sm-10 --> 
                                  </div>
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
                                                                    <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload</a> (pdf,doc,docs,txt)
                              </div>
                              <!-- col-xs-12 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>                       
                <div class="form-group">
                                              
                        <label class="col-sm-3 control-label">Language</label>
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
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">About</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <textarea rows="3" placeholder="About Yourself"></textarea>
                              </div>
                              <!-- col-xs-12 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        
                              



                        <!-- form-group -->

                        <hr/>
                        <h3 class="mgbt-xs-15">Contact Info</h3>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Mobile Phone</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text"  placeholder="mobile phone">
                              </div>
                              <!-- col-xs-12 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text"  placeholder="Email">
                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
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
                                <input type="text"  placeholder="facebook">
                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group -->
                        
                                                <div class="form-group">
                          <label class="col-sm-3 control-label">LinkedIn</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text"  placeholder="LinkedIn">
                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
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
                                <input type="text" placeholder="twitter">
                              </div>
                              <!-- col-xs-9 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        <!-- form-group --> 
                        <div id="Education_Details">
                          <hr/>
                          <h3 class="mgbt-xs-15">Education</h3>
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
                              <label class="col-sm-3 control-label">Highest Qualification</label>
                              <div class="col-sm-9 controls">
                                <div class="row mgbt-xs-0">
                                  <div class="col-xs-9">

                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Highest Qualification</option>
                                    <option value="5">Doctorate/PhD</option>
                                    <option value="4">Post Graduation</option>
                                    <option value="3">Graduation</option>
                                    <option value="2">12th/O-Level</option>
                                    <option value="1">10th</option>
                                    
                                    </select>
                                    
                                    

                                  </div>
                                  <!-- col-xs-12 -->
                                  
                                  <div class="col-xs-2">
                                    <div class="btn-action">
                                      <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                      <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                        <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                      </ul>
                                    </div>
                                    <!-- btn-action col-sm-10 --> 
                                  </div>
                                </div>
                                <!-- row --> 
                              </div>
                              <!-- col-sm-10 --> 
                            </div>
                            <div class="form-group"  >
                              <label class="col-sm-3 control-label">Course / Specialization</label>
                              <div class="col-sm-9 controls">
                                <div class="row mgbt-xs-0">
                                  <div class="col-xs-5">

                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Course</option><option value="1">B.A.</option><option value="2">B.Sc.</option><option value="3">B.Com</option><option value="4">BMS</option><option value="6">BBA</option><option value="7">B.Des</option></select>

                                  </div>
                                  <!-- col-xs-12 -->
                                  <div class="col-xs-4">
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Specialization</option>
                                    
                                    <option value="10">Biology</option>
                                    <option value="10">Botany</option>
                                    <option value="10">Chem</option>
                                    
                                    </select>

                                  </div>
                                  <div class="col-xs-2">
                                    <div class="btn-action">
                                      <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                      <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                        <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                      </ul>
                                    </div>
                                    <!-- btn-action col-sm-10 --> 
                                  </div>
                                </div>
                                <!-- row --> 
                              </div>
                              <!-- col-sm-10 --> 
                            </div>




                            <div class="form-group"  >
                              <label class="col-sm-3 control-label">University / College</label>
                              <div class="col-sm-9 controls">
                                <div class="row mgbt-xs-0">
                                  <div class="col-xs-9">
                                    <input type="text"  placeholder="Degree Title">
                                  </div>
                                  <!-- col-xs-12 -->
                                <!--  <div class="col-xs-3">

                                     <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload
                                     </a> 

                                  </div>-->
                                 <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                    </ul>
                                  </div>
                                  
                                </div> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          
                                                      <div class="form-group"  >
                              <label class="col-sm-3 control-label">Course Type / Passing Year</label>
                              <div class="col-sm-9 controls">
                                <div class="row mgbt-xs-0">
                                  <div class="col-xs-5">

                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Course Type</option><option value="1">Part Time</option><option value="2">Full Time</option><option value="3">Coressponded</option></select>

                                  </div>
                                  <!-- col-xs-12 -->
                                  <div class="col-xs-4">
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Passing Year</option>
                                    <option value="3">2020</option>
                                    <option value="3">2019</option>
                                    </select>

                                  </div>
                                  <div class="col-xs-2">
                                    <div class="btn-action">
                                      <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                      <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                        <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                      </ul>
                                    </div>
                                    <!-- btn-action col-sm-10 --> 
                                  </div>
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


                      <div id="Experience_Details">
                        <hr/>
                        <h3 class="mgbt-xs-15">Experience Info</h3>
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
                            <label class="col-sm-3 control-label">Current Designation</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">

                                  <input type="email"  placeholder="Title / Role">

                                </div>
                                <!-- col-xs-12 -->

                               <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>




                        <div class="form-group"  >
                          <label class="col-sm-3 control-label">Company</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-8">
                                <input type="text"  placeholder="Company Name">
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
                          <label class="col-sm-3 control-label">Location</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text" id="datepicker-normal" placeholder="Company Location"  />
                              </div>
                              <!-- col-xs-12 -->
                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>

                          <div class="form-group"  >
                            <label class="col-sm-3 control-label">Experience</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-5">

                                  <input type="email"  placeholder="Starting Date">

                                </div>
                                <!-- col-xs-12 -->
                                <div class="col-xs-4">
                                 <input type="email"  placeholder="Ending Date">

                               </div>
                               <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>


                        
                                                <div class="form-group"  >
                          <label class="col-sm-3 control-label">Anual Salary</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                         <div class="col-xs-2">
                         
                         <select  id="curr" name="degree_type_id"><option value="" selected="selected">₹</option>

                                    <option value="3">$</option>
                                    <option value="4">€</option>

        
                                    </select>
                                      </div>
<div class="col-xs-5">
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
                                  
                                  <div class="col-xs-5">
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
                              <!-- col-xs-12 -->

                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>

                      </div>
                      
                      
                                                <div class="form-group"  >
                          <label class="col-sm-3 control-label">Industry</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                         <div class="col-xs-12">
                         
                         <select  id="curr" name="degree_type_id"><option value="" selected="selected">Select the industry you work for</option>

                                    <option value="3">&nbsp;</option>
                                    <option value="4">&nbsp;</option>

        
                                    </select>
                                      </div>
   
                                 

                              </div>
                              <!-- col-xs-12 -->

                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>

                      
                                                <div class="form-group"  >
                          <label class="col-sm-3 control-label">Funtional Area</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                         <div class="col-xs-12">
                         
                         <select  id="curr" name="degree_type_id"><option value="" selected="selected">Select the department you work in</option>

                                    <option value="3">&nbsp;</option>
                                    <option value="4">&nbsp;</option>

        
                                    </select>
                                      </div>
   
                                 

                              </div>
                              <!-- col-xs-12 -->

                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>
                        
                                            <div class="form-group">
                      
                      <label class="col-sm-3 control-label">Skills</label>
                      <div class="col-sm-9 controls">
                        <div class="row mgbt-xs-0">
                          <div class="col-xs-9">

                            <div id="tags1584440712527_tagsinput" class="tagsinput" style="width: auto; height: 100px;">
                              <span class="tag"><span>Java&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                              <span class="tag"><span>PHP&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>Database&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>Design&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>UI & UX&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                              <div id="tags1584440712527_addTag"><input id="tags1584440712527_tag" value="" data-default="add a tag" style="color: rgb(102, 102, 102); width: 68px;"></div><div class="tags_clear"></div></div>


                            </div>
                            <!-- col-xs-9 -->
                            <div class="col-xs-2">
                              <div class="btn-action">
                                <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                <ul class="dropdown-menu pull-right">
                                  <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                  <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                  <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                </ul>
                              </div>
                              <!-- btn-action col-sm-10 --> 
                            </div>
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

                                <textarea rows="3" placeholder="Job Discription"></textarea>

                              </div>
                              <!-- col-xs-12 -->

                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
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

                                  <input type="email"  placeholder="Client Name">

                                </div>
                                <!-- col-xs-12 -->
                                <div class="col-xs-4">
                                 <input type="email"  placeholder="Year">

                               </div>
                               <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
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
                                <input type="text"  placeholder="Client / company name">
                              </div>
                              <!-- col-xs-12 -->

                                 <div class="col-xs-2">
                                  <div class="btn-action">
                                    <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                      <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                      <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                    </ul>
                                  </div>
                                  
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

                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Years</option><opti748on value="1">0 Year</option><option value="2">1 Year</option><option value="3">2 Years</option><option value="4">3 Years</option><option value="5">4 Years</option><option value="6">5 Years</option><option value="7">6 Years</option><option value="8">7 Years</option><option value="9">8 Years</option><option value="10">9 Years</option><option value="10">10+ Years</option></select>

                                  </div>

                                  <!-- col-xs-12 -->
                                  <div class="col-xs-4">
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
                                                                    <div class="col-xs-1">
                                      </div>
                                  <div class="col-xs-2">
                                    <div class="btn-action">
                                      <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                      <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                        <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                      </ul>
                                    </div>
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

                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Highest Qualification</option>
                                    <option value="5">Recruitment</option>
                                    <option value="4">Post Graduation</option>
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
                                    <div class="btn-action">
                                      <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                      <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                        <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                      </ul>
                                    </div>
                                    <!-- btn-action col-sm-10 --> 
                                  </div>
                                </div>
                                <!-- row --> 
                              </div>
                              <!-- col-sm-10 --> 
                            </div>
                        <div class="form-group"  >
                          <label class="col-sm-3 control-label">Project link by document</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-8">
                                <input type="text"  placeholder="Type here if any">
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
                        <div class="form-group"  >
                          <label class="col-sm-3 control-label">Discription</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">

                                <textarea rows="3" placeholder="Project Discription"></textarea>

                              </div>
                              <!-- col-xs-12 -->

                              <div class="col-xs-2">
                                <div class="btn-action">
                                  <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                  <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                    <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                  </ul>
                                </div>
                                <!-- btn-action col-sm-10 --> 
                              </div>
                            </div>
                            <!-- row --> 
                          </div>
                          <!-- col-sm-10 --> 
                        </div>

                      </div>
                      <!-- form-group -->
                      <input type="button" name="add_itemExpe" value="Add More" onClick="addMoreExpe();" />
                      <input type="button" name="del_item" value="Delete" onClick="deleteRow();" />




                                      
                      <br>





                      </div>
                      <!-- col-sm-12 complete form close --> 
                    </div>
                    <!-- row --> 

                  </div>
                  <!-- panel-body -->
                  <div class="pd-20">
                    <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Finish</button>
                  </div>
                </form>
              </div>
              <!-- Panel Widget --> 
            </div>
            <!-- col-sm-12--> 
          </div>
          <!-- row --> 

        </div>
        <!-- .vd_content-section --> 

      </div>
      <!-- .vd_content --> 
    </div>
    <!-- .vd_container --> 
  </div>



  <?php
  include_once('footer.php');
  ?>