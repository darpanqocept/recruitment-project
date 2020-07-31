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
            <li><a href="pages-custom-product.html">Pages</a> </li>
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
                        <h3 class="mgbt-xs-15">Profile Setting</h3>
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
                          <label class="col-sm-3 control-label">Marital Status</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <select class="width-40">
                                  <option>Single</option>
                                  <option>Married</option>
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

                        <div class="form-group">
                          <label class="col-sm-3 control-label">About</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <textarea rows="3"></textarea>
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
                        <h3 class="mgbt-xs-15">Contact Setting</h3>
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
                          <label class="col-sm-3 control-label">Website</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">
                                <input type="text"  placeholder="website">
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
                              <label class="col-sm-3 control-label">Degree Detail</label>
                              <div class="col-sm-9 controls">
                                <div class="row mgbt-xs-0">
                                  <div class="col-xs-5">

                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Degree Level</option><option value="1">Non-Matriculation</option><option value="2">Matriculation/O-Level</option><option value="3">Intermediate/A-Level</option><option value="4">Bachelors</option><option value="5">Masters</option><option value="6">MPhil/MS</option><option value="7">PHD/Doctorate</option><option value="8">Certification</option><option value="9">Diploma</option><option value="10">Short Course</option></select>

                                  </div>
                                  <!-- col-xs-12 -->
                                  <div class="col-xs-4">
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Degree Type</option></select>

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
                              <label class="col-sm-3 control-label">Degree Title</label>
                              <div class="col-sm-9 controls">
                                <div class="row mgbt-xs-0">
                                  <div class="col-xs-8">
                                    <input type="text"  placeholder="Degree Title">
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

                          

                        </div>
                        <!-- form-group -->
                        <input type="button" name="add_itemEDU" value="Add More" onClick="addMoreEDU();" />
                        <input type="button" name="del_item" value="Delete" onClick="deleteRow();" />



                      </div><!-- Education Form Close -->


                      <div id="Experience_Details">
                        <hr/>
                        <h3 class="mgbt-xs-15">Experience</h3>
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
                            <label class="col-sm-3 control-label">Experience</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-5">

                                  <input type="email"  placeholder="Experience Title">

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
                          <label class="col-sm-3 control-label">Discription</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">

                                <input type="email"  placeholder="Experience Discription">

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



                    </div>
                                          <div id="Experience_Details">
                        <hr/>
                        <h3 class="mgbt-xs-15">Project</h3>
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
                          <label class="col-sm-3 control-label">Name</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-8">
                                <input type="text"  placeholder="Projects Name">
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
                            <label class="col-sm-3 control-label">Duration</label>
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
                          <label class="col-sm-3 control-label">Discription</label>
                          <div class="col-sm-9 controls">
                            <div class="row mgbt-xs-0">
                              <div class="col-xs-9">

                                <input type="email"  placeholder="Experience Discription">

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



                    </div>

                    <hr>

                    <div class="form-group">
                      <h3 class="mgbt-xs-15">&nbsp;&nbsp;Skills</h3>
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


                      <hr>

                      <div class="form-group">
                                              <h3 class="mgbt-xs-15">&nbsp;&nbsp;Language</h3>
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