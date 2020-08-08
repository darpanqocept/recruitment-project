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
                                                                <td>Score</td>
                                                                <td>                    <button class="btn btn-primary " data-toggle="modal" data-target="#myModal"><i style="color:red" class="fa fa-exclamation" aria-hidden="true"></i> 460 </button></td>
                                                            </tr>
                                                            <tr>


                                                                <td><b>Verified Documents</b></td>
                                                                <td>                      <div style="text-align:right"> <button class="btn btn-primary " data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"   >Upload</button> </div></td>


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
                                                            <form role="form">
                                                                <div class="row setup-content" id="step-1">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-md-12">
                                                                            <h3> Personal Documents</h3>
                                                                            <form class="form-horizontal">


                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Citizen</label>
                                                                                    <div class="">



                                                                                        <div class="col-xs-4">

                                                                                            <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Citizen </option>
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
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Citizenship Proof </option>
                                                                                            <option value="1">Aadhaar  Card</option>
                                                                                            <option value="2">Passport</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                                </div>



                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Current Address</label>
                                                                                    <div class="col-sm-9 controls">


                                                                                        <textarea rows="3"  class="form-control" placeholder="Current Address"></textarea>
                                                                                    </div>

                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Permanent Address</label>
                                                                                    <div class="col-sm-9 controls">


                                                                                        <textarea rows="3"  class="form-control" placeholder="Permanent Address"></textarea>
                                                                                    </div>

                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Address Proof</label>
                                                                                    <div class="col-sm-6 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Address Proof </option>
                                                                                            <option value="1">Voter ID</option>
                                                                                            <option value="2">Ration Card</option>
                                                                                            <option value="2">Electricity Bill</option>
                                                                                            <option value="1">Aadhaar  Card</option>
                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">ID  Proof</label>
                                                                                    <div class="col-sm-6 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">ID  Proof </option>
                                                                                            <option value="1">Pan Card</option>
                                                                                            <option value="2">Driving License</option>
                                                                                            <option value="2">Passport</option>
                                                                                            <option value="1">Aadhaar  Card</option>
                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label class="col-sm-3 control-label">Number Of Family Member</label>
                                                                                    <div class="col-sm-9 controls">
                                                                                        <input class="form-control" type="text" placeholder="Number Of Family Member (including you)">
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
                                                                                    <input class="form-control" type="text" placeholder="College Name / University Name">
                                                                                </div>

                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Acadamic Session</label>
                                                                                <div class="col-sm-3 controls">
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected"> Starting Year </option>
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
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected"> Ending Year </option>
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
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Type Of Documents </option>
                                                                                        <option value="1">Individual Certificate</option>
                                                                                        <option value="2">Consolidated Memo</option>
                                                                                        <option value="2">Convocation</option>
                                                                                    </select>

                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Documents 2</label>
                                                                                <div class="col-sm-4 controls">
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Type Of Documents </option>
                                                                                        <option value="1">Individual Certificate</option>
                                                                                        <option value="2">Consolidated Memo</option>
                                                                                        <option value="2">Convocation</option>
                                                                                    </select>

                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Documents 3</label>
                                                                                <div class="col-sm-4 controls">
                                                                                    <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Type Of Documents </option>
                                                                                        <option value="1">Individual Certificate</option>
                                                                                        <option value="2">Consolidated Memo</option>
                                                                                        <option value="2">Convocation</option>
                                                                                    </select>

                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                            </div>


                                                                            <div class="col-md-12" style="text-align: center;">
                                                                                <br><br>               <button class="btn btn-primary nextBtn btn-lg pull-center" type="button" >Next</button> <br><br>

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
                                                                                    <input class="form-control" type="text" placeholder="Title">
                                                                                </div>

                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Company Name</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <input class="form-control" type="text" placeholder="Company Name">
                                                                                </div>

                                                                            </div>


                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Duration</label>
                                                                                <div class="col-sm-7 controls">

                                                                                    <div class="col-sm-6 controls">
                                                                                        <input class="form-control" type="text" placeholder="Joining Date">
                                                                                    </div>



                                                                                    <div class="col-sm-1 controls">
                                                                                        To
                                                                                    </div>
                                                                                    <div class="col-sm-5 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Now </option>
                                                                                            <option value="1">Date </option>


                                                                                        </select>

                                                                                    </div>


                                                                                </div>


                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Offer letter / Appointment letter</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Offer letter </option>
                                                                                            <option value="2">Appointment letter</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-4 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>

                                                                                </div>

                                                                            </div>


                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Relieving letter / Experience letter</label>
                                                                                <div class="col-sm-7 controls">


                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Relieving letter </option>
                                                                                            <option value="2">Experience letter</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-4 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>

                                                                                </div>

                                                                            </div>


                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Designation change letter / Promotion letter</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Designation change letter </option>
                                                                                            <option value="2">Promotion letter</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-4 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>

                                                                                </div>

                                                                            </div>

                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Salary Slip / Bank Statement</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Salary Slip  </option>
                                                                                            <option value="2">Bank Statement</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-4 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>

                                                                                </div>

                                                                            </div>

                                                                            <br>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Reference letter / Referral letter</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <div class="col-sm-8 controls">
                                                                                        <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Type Of Documents </option>
                                                                                            <option value="1">Reference letter   </option>
                                                                                            <option value="2">Referral letter</option>

                                                                                        </select>

                                                                                    </div>
                                                                                    <a class="btn vd_btn  vd_bg-blue  col-sm-4 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                                </div>

                                                                            </div>

                                                                            <br>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Roles and Responsibilities</label>
                                                                                <div class="col-sm-7 controls">
                                                                                    <textarea rows="5"  class="form-control" placeholder="Describe about your roles and explain "></textarea>
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
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification">
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification">
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification">
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-3 control-label">Certification</label>
                                                                                <div class="col-sm-6 controls">
                                                                                    <input class="form-control" type="text" placeholder="Name of Certification">
                                                                                </div>
                                                                                <a class="btn vd_btn  vd_bg-blue  col-sm-3 " href=""><i class="fa fa-cloud-upload append-icon"><input type="file" style="display: none;"></i> Upload</a>
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

                                                                                            <input type="email"  placeholder="Client Name">

                                                                                        </div>
                                                                                        <!-- col-xs-12 -->
                                                                                        <div class="col-xs-4">
                                                                                            <input type="email"  placeholder="Year">

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
                                                                                            <input type="text"  placeholder="Client / company name">
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

                                                                                            <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Project Type</option>
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
                                                                                            <input type="text"  placeholder="Type here  Or Upload Document">
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
                                                                            <div style="text-align: left;">
                                                                                <h4>Personal   <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>
                                                                                <h4> Educational Documents <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>
                                                                                <h4> Professional Documents <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>
                                                                                <h4> Certification <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>
                                                                                <h4> Projects <input type="checkbox" id="vehicle2" name="vehicle2" value="Car"></h4>

                                                                            </div>



                                                                            <div class="col-md-12" style="text-align: center;">
                                                                                <br><br>

                                                                                <button class="btn btn-success btn-lg " type="submit">Finish!</button>



                                                                                <br><br>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </form>
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
                                        <div class="col-sm-9">
                                            <h3 class="mgbt-xs-15">Account Setting</h3>              <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="email"  placeholder="email@yourcompany.com">
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
                                                            <input type="text"  placeholder="username">
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
                                                <label class="col-sm-3 control-label">Confirm Password<i style="color: red">&nbsp;*&nbsp;</i></label>
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
                                            <div style="text-align:right"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">First Name<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text"  placeholder="First name as per documents">
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
                                                            <input type="text" placeholder="Last name as per documents">
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
                                  <input type="radio" checked="" value="option3" id="optionsRadios3" name="optionsRadios2">
                                  <label for="optionsRadios3"> Male </label>
                                </span>
                                <span class="vd_radio  radio-danger" > 

                                  <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios2">
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
                                                            <input type="text" id="datepicker-normal" class="width-40" />
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
                                                            <input type="text" id="datepicker-normal" class="width-40" />
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
                                                            <select class="width-40">
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
                                                            <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload</a> (pdf,doc,docs,txt)
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
                                            <div class="form-group">

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
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">About<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <textarea rows="3" placeholder="About Yourself"></textarea>
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
                                            <div style="text-align:right"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div><br><br>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mobile Phone<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-xs-9">
                                                            <input type="text"  placeholder="mobile phone">
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
                                                            <input type="text"  placeholder="Email">
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
                                                            <input type="text"  placeholder="facebook">
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
                                                            <input type="text"  placeholder="LinkedIn">
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
                                                            <input type="text" placeholder="twitter">
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

                                                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Highest Qualification</option>
                                                                        <option value="5">Doctorate/PhD</option>
                                                                        <option value="4">Post Graduation</option>
                                                                        <option value="3">Graduation</option>
                                                                        <option value="2">12th/O-Level</option>
                                                                        <option value="1">10th</option>

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

                                                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Course</option><option value="1">B.A.</option><option value="2">B.Sc.</option><option value="3">B.Com</option><option value="4">BMS</option><option value="6">BBA</option><option value="7">B.Des</option></select>

                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-4">
                                                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Specialization<i style="color: red">&nbsp;*&nbsp;</i></option>

                                                                        <option value="10">Biology</option>
                                                                        <option value="10">Botany</option>
                                                                        <option value="10">Chem</option>

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
                                                                    <input type="text"  placeholder="Degree Title">
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

                                                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select Course Type</option><option value="1">Part Time</option><option value="2">Full Time</option><option value="3">Coressponded</option></select>

                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-4">
                                                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Passing Year</option>
                                                                        <option value="3">2020</option>
                                                                        <option value="3">2019</option>
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


                                            <div id="Experience_Details">
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

                                                                    <input type="email"  placeholder="Title / Role">

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
                                                        <label class="col-sm-3 control-label">Location<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row mgbt-xs-0">
                                                                <div class="col-xs-9">
                                                                    <input type="text" id="datepicker-normal" placeholder="Company Location"  />
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

                                                                    <input type="email"  placeholder="Starting Date">

                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-4">
                                                                    <input type="email"  placeholder="Ending Date">

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

                                                                        <select  id="curr" name="degree_type_id"><option value="" selected="selected">?</option>

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

                                                                    <select  id="curr" name="degree_type_id"><option value="" selected="selected">Select the industry you work for</option>

                                                                        <option value="3">&nbsp;</option>
                                                                        <option value="4">&nbsp;</option>


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

                                                                    <select  id="curr" name="degree_type_id"><option value="" selected="selected">Select the department you work in</option>

                                                                        <option value="3">&nbsp;</option>
                                                                        <option value="4">&nbsp;</option>


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

                                                <div class="form-group">

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

                                                                    <div id="tags1584440712527_addTag"><input id="tags1584440712527_tag" value="" data-default="add a tag" style="color: rgb(102, 102, 102); width: 68px;"></div><div class="tags_clear"></div></div>


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
                                                </div>

                                                <div class="form-group"  >
                                                    <label class="col-sm-3 control-label">Discription<i style="color: red">&nbsp;*&nbsp;</i></label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row mgbt-xs-0">
                                                            <div class="col-xs-9">

                                                                <textarea rows="3" placeholder="Job Discription"></textarea>

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

                                                                    <input type="email"  placeholder="Client Name">

                                                                </div>
                                                                <!-- col-xs-12 -->
                                                                <div class="col-xs-4">
                                                                    <input type="email"  placeholder="Year">

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
                                                                    <input type="text"  placeholder="Client / company name">
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

                                                                    <textarea rows="3" placeholder="Project Discription"></textarea>

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
                                        <!-- row -->

                                    </div>
                                    <!-- panel-body -->
                                    <div class="pd-20" style="text-align: center;">
                                        <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Update</button>
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



@include('web.template.CRM.job.include.footer')