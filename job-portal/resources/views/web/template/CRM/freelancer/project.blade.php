@include('web.template.CRM.freelancer.include.header')

<div class="vd_content-wrapper">
    <div class="vd_container">
        <div class="vd_content clearfix">
            <div class="vd_head-section clearfix">
                <div class="vd_panel-header">
                    <ul class="breadcrumb">
                        <li><a href="index-2.html">Home</a> </li>

                        <li class="active">My Projects</li>
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
                    <h1>My Projects</h1>
                    <small class="subtitle"></small> </div>
            </div>

            <div class="vd_content-section clearfix">

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
                        <div class="vd_status-widget vd_bg-blue widget">
                            <div class="vd_panel-menu">
                                <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                            </div>
                            <!-- vd_panel-menu -->

                            <a class="panel-body" href="viewedproject.php">
                                <div class="clearfix">
										<span class="menu-icon">
											<i class="fa fa-line-chart " aria-hidden="true"></i>
										</span>
										<span class="menu-value">
											1,088
										</span>
                                </div>
                                <div class="menu-text clearfix">
                                    Working Project									</div>
                            </a>
                        </div>                </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
                        <div class="vd_status-widget vd_bg-green widget">
                            <div class="vd_panel-menu">
                                <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                            </div>
                            <!-- vd_panel-menu -->

                            <a class="panel-body" href="sharedprojector.php">
                                <div class="clearfix">
											<span class="menu-icon">
												<i class="fa fa-share-square-o " aria-hidden="true"></i>
											</span>
											<span class="menu-value">
												64
											</span>
                                </div>
                                <div class="menu-text clearfix">
                                    Shared Project
                                </div>
                            </a>
                        </div>                </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mgbt-xs-15">
                        <div class="vd_status-widget vd_bg-yellow widget">
                            <div class="vd_panel-menu">
                                <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                            </div>
                            <!-- vd_panel-menu -->

                            <a class="panel-body" href="SavedProjects.php">
                                <div class="clearfix">
												<span class="menu-icon">
													<i class="fa fa-flag-checkered" aria-hidden="true"></i>
												</span>
												<span class="menu-value">
													24
												</span>
                                </div>
                                <div class="menu-text clearfix">
                                    Finished Projects
                                </div>
                            </a>
                        </div>                </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mgbt-xs-15">
                        <div class="vd_status-widget vd_bg-red widget">
                            <div class="vd_panel-menu">
                                <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
                            </div>
                            <!-- vd_panel-menu -->

                            <a class="panel-body" href="AppliedProjects.php">
                                <div class="clearfix">
													<span class="menu-icon">
														<i class="fa fa-check-square-o " aria-hidden="true"></i>
													</span>
													<span class="menu-value">
														78
													</span>
                                </div>
                                <div class="menu-text clearfix">
                                    Applied Projects
                                </div>
                            </a>
                        </div>                </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">

                        <div id="project-tab" class="tab-pane">
                            <h2> Working Project </h2>
                            <div class="content-grid column-xs-2 column-sm-6 height-xs-3">
                                <div data-rel="scroll" >
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Logo</th>
                                            <th>Clients</th>
                                            <th>Description</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Finish </th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>1</td>
                                            <td><img height="40" src="img/avatar/avatar.jpg" alt="example image"></td>
                                            <td>Ashwini </td>
                                            <td>Prepare the documents e.g. Bookkeeping, accounting and etc.Teach how to prepare the documents (Bookkeeping and Accounting) to enable us to prepare the documents for the following years by ourself.
                                            </td>
                                            <td class="center">2020/02/03</td>
                                            <td class="center">
                                                <span class="label label-success">Finish</span><br>
                                                <br>
                                                <strong>$ 250</strong>
                                            </td>
                                            <td class="center">2020/04/03</td>
                                            <td class="menu-action rounded-btn">
                                                <a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-times"></i>
                                                </a>

                                            </td>
                                        </tr>




                                        </tbody>
                                    </table>
                                </div>
                                <div class="closing text-center">
                                    <a href="#">See All New Users <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>


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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Repost</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Schedule</div> </a> </li>
                                                            <li class="line"></li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Share</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Copy</div> </a> </li>
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


                                        Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team </p>
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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Repost</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Schedule</div> </a> </li>
                                                            <li class="line"></li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Share</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Copy</div> </a> </li>
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


                                        Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team </p>
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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Repost</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Schedule</div> </a> </li>
                                                            <li class="line"></li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Share</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Copy</div> </a> </li>
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
                                            Role Category: Retail Sales</strong><br></p>
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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Repost</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Schedule</div> </a> </li>
                                                            <li class="line"></li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Share</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Copy</div> </a> </li>
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


                                        Work Profile: B2B sales with interaction with top to middle level management of the client, client maintenance and client farming, Client relationship maintenance, payment follow-ups, Project Management along with tech team </p>
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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
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
                                        <div  data-rel="scroll"	>
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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Repost</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Schedule</div> </a> </li>
                                                            <li class="line"></li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Share</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Copy</div> </a> </li>
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
                                        Education</h4>
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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Repost</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Schedule</div> </a> </li>
                                                            <li class="line"></li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Share</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Copy</div> </a> </li>
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
                                        Education</h4>
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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Repost</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Schedule</div> </a> </li>
                                                            <li class="line"></li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Share</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Copy</div> </a> </li>
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
                                        Education</h4>
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
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">User Menu</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-trophy"></i></div> <div class="menu-text">Panel Menu</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Other Menu</div> </a> </li>
                                                            <li class="line"></li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks"></i></div> <div class="menu-text"> Tasks</div> </a> </li>
                                                            <li> <a href="#"> <div class="menu-icon"><i class=" icon-lock"></i></div> <div class="menu-text">Privacy</div> </a> </li>
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
                                        <div  data-rel="scroll"	>
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
</div>
@include('web.template.CRM.freelancer.include.footer')