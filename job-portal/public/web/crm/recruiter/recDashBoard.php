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
            <li class="active"> Dashboard</li>
          </ul>
          <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
            <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
            <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
            <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
            
          </div>
          
        </div>
      </div>
      <!-- vd_head-section -->
      
      <div class="vd_title-section clearfix">
        <div class="vd_panel-header">
          <h1>Dashboard</h1>
          <small class="subtitle"></small>
          <div class="vd_panel-menu  hidden-xs">
          
            <!-- menu -->
                    <button class="btn btn-primary " data-toggle="modal" data-target="#myModal"> Post New Job Ads</button>&nbsp;&nbsp;<button class="btn btn-primary " data-toggle="modal" data-target="#myModal2"> Post Feed </button>
  

          <!-- vd_panel-menu --> 
        </div>
        <!-- vd_panel-header --> 
      </div>
      <!-- vd_title-section -->
      
      <div class="vd_content-section clearfix">
        <div class="row">
                                    <div class="col-md-7">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="tabs widget">
                                    <ul class="nav nav-tabs widget">
                                      <li class="active">
                                        <a data-toggle="tab" href="#home-tab">
                                          <span class="menu-icon"><i class="fa fa-comments"></i></span>
										Feeds
                                          <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                                        </a></li>
                                        <li>
                                          <a data-toggle="tab" href="#posts-tab">
                                            <span class="menu-icon"><i class="fa fa-rocket"></i></span>
                                            Notifications
                                            <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                                          </a></li>
                                          <li>
                                            <a data-toggle="tab" href="#list-tab">
                                              <span class="menu-icon"><i class="fa fa-user"></i></span>
                                              New Users
                                              <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                                            </a></li>
                                    
                                                                    <li>
                                            <a data-toggle="tab" href="#project-tab">
                                              <span class="menu-icon"><i class="fa fa-user"></i></span>
                                              Projects
                                              <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                                            </a></li>
                                    
                                    
                                          </ul>
                                          <div class="tab-content">
                                            <div id="home-tab" class="tab-pane active">                                         
                                             <div class="content-list content-image menu-action-right">
                                               <div  data-rel="scroll" data-scrollheight="550">
                                                 <ul class="list-wrapper pd-lr-15">
                                                                    <li class="tl-item">
                    <div class="tl-icon success"> <i class="fa fa-comments"></i> </div>
                    <div class="tl-label panel widget light-widget panel-bd-left">
                    <div class="panel-body"> <img alt="example image" class="tl-img img-right img-circle  mgtp-5" src="img/avatar/avatar-5.jpg">
                      <h3 class="mgtp-10 mgbt-xs-5"> Rhonda William <em class="vd_soft-grey font-sm">via facebook</em> </h3>
                      <span class="vd_soft-grey">1.30 pm  -  near <a href="#">Los Angeles</a> - <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-original-title="Shared Globally" class=""><i class="fa fa-globe"></i></a></span>
                      <div class="clearfix mgbt-xs-10"></div>
                      <p class="mgbt-xs-20"> Hello <a href="#">Jason</a>, how are you, it's been a long time since we last met? I really miss you. And want to meet you soooooon.....</p>
                      <div class="tl-action"><a role="button" class="btn btn-sm mgr-10" href="javascript:void(0)"><i class="fa fa-thumbs-up fa-fw"></i> Like (10)</a> <a role="button" class="btn btn-sm btn-xs mgr-10" href="javascript:void(0)"><i class="fa fa-comment fa-fw"></i> Comment (2)</a> <a role="button" class="btn btn-sm " href="javascript:void(0)"><i class="fa fa-share fa-fw"></i> Share</a></div>
                      <hr class="mgtp-0"/>
                      <div class="comments">
                        <div class="content-list content-image">
                          <ul class="list-wrapper no-bd-btm">
                            <li>
                              <div class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></div>
                              <div class="menu-text"> Do you play or follow any sports?
                                <div class="menu-info"> <span class="menu-date">12 Minutes Ago </span> </div>
                              </div>
                            </li>
                            <li>
                              <div class="menu-icon"><img src="img/avatar/avatar-2.jpg" alt="example image"></div>
                              <div class="menu-text"> Good job mate !
                                <div class="menu-info"> <span class="menu-date">1 Hour 20 Minutes Ago </span> </div>
                              </div>
                            </li>
                            <li>
                              <div class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></div>
                              <div class="menu-text"> Do you play or follow any sports?
                                <div class="menu-info"> <span class="menu-date">12 Minutes Ago </span> </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <!-- content-list -->
                        <hr class="no-bd"/>
                        <div class="reply-comment">
                          <div class="content-list content-image">
                            <div class="list-wrapper">
                              <div>
                                <div class="menu-icon"><img src="img/avatar/avatar-5.jpg" alt="example image"></div>
                                <div class="menu-text">
                                  <textarea  rows="3" class="width-100" placeholder="Write a comment..."></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- reply-comment -->
                        </div>
                        <!-- comments --> 
                      </div>
                      <!-- panel-body --> 
                    </div>
                    <!-- panel --> 
                  </li>
                                                    
                                                  
                                                                                             
                                                                     <li class="tl-item">
                    <div class="tl-icon danger"> <i class="fa fa-picture-o"></i> </div>
                    <div class="tl-label panel widget light-widget panel-bd-left vd_bdl-red">
                      <div class="panel-body"> <img alt="example image" class="tl-img img-right img-circle  mgtp-5" src="img/avatar/avatar-5.jpg">
                        <h3 class="mgtp-10 mgbt-xs-5"> Rhonda William <em class="vd_soft-grey font-sm">@rhondawil</em> </h3>
                        <span class="vd_soft-grey">07.45 am  -  near <a href="#">Los Angeles</a> - <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-original-title="Shared Globally" class=""><i class="fa fa-globe"></i></a></span>
                        <div class="clearfix mgbt-xs-10"></div>
                        <p class="mgbt-xs-20"> Little hope on this little country</p>
                        <div class="tl-post-image mgbt-xs-20"> <a data-rel="prettyPhoto[2]" href="img/blog/01-large.jpg"> <img src="img/blog/01-large.jpg" alt="example image"> </a> </div>
                        <div class="tl-action"><a role="button" class="btn btn-sm mgr-10" href="javascript:void(0)"><i class="fa fa-thumbs-up fa-fw"></i> Like</a> <a role="button" class="btn btn-sm btn-xs mgr-10" href="javascript:void(0)"><i class="fa fa-comment fa-fw"></i> Comment</a> <a role="button" class="btn btn-sm " href="javascript:void(0)"><i class="fa fa-share fa-fw"></i> Share</a></div>
                      </div>
                      <!-- panel-body --> 
                    </div>
                    <!-- panel --> 
                  </li> 
			
                                                                   <li class="tl-item tl-item-date tl-separator">
                    <div class="tl-date  tl-date-2"> Yes<br/>
                      terday </div>
                  </li>
                  <li class="tl-item">
                    <div class="tl-icon warning"> <i class="fa fa-video-camera"></i> </div>
                    <div class="tl-label panel widget light-widget panel-bd-left vd_bdl-yellow">
                      <div class="panel-body"> <img alt="example image" class="tl-img img-right img-circle  mgtp-5" src="img/avatar/avatar-5.jpg">
                        <h3 class="mgtp-10 mgbt-xs-5"> Rhonda William <em class="vd_soft-grey font-sm">@rhondawil</em> </h3>
                        <span class="vd_soft-grey">07.45 am  -  near <a href="#">Los Angeles</a> - <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-original-title="Shared Globally" class=""><i class="fa fa-globe"></i></a></span>
                        <div class="clearfix mgbt-xs-10"></div>
                        <p class="mgbt-xs-20"> Gosh this is so funny...</p>
                         <div class="tl-post-video mgbt-xs-20"> <iframe style="width:100%; height:350px; border:none;" src="http://www.youtube.com/embed/ASO_zypdnsQ" allowfullscreen></iframe></div>
                        <div class="tl-action"><a role="button" class="btn btn-sm mgr-10" href="javascript:void(0)"><i class="fa fa-thumbs-up fa-fw"></i> Like</a> <a role="button" class="btn btn-sm btn-xs mgr-10" href="javascript:void(0)"><i class="fa fa-comment fa-fw"></i> Comment</a> <a role="button" class="btn btn-sm " href="javascript:void(0)"><i class="fa fa-share fa-fw"></i> Share</a></div>
                      </div>
                      <!-- panel-body --> 
                    </div>
                    <!-- panel --> 
                  </li>
                  <li class="tl-item tl-item-year tl-separator" >
                    <div class="tl-year">2013</div>
                  </li>
                  <li class="tl-item tl-item-date tl-separator">
                    <div class="tl-date  tl-date-3"> <span class="tl-day">25</span><br/>
                      <span class="tl-month">NOV</span> </div>
                  </li>
                  <li class="tl-item">
                    <div class="tl-icon info entypo-icon"> <i class="icon-newspaper"></i> </div>
                    <div class="tl-label panel widget light-widget panel-bd-left vd_bdl-blue">
                      <div class="panel-body"> <img alt="example image" class="tl-img img-right img-circle  mgtp-5" src="img/avatar/avatar-5.jpg">
                        <h3 class="mgtp-10 mgbt-xs-5"> Rhonda William </h3>
                        <span class="vd_soft-grey">07.45 am  -  near <a href="#">Los Angeles</a> - <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-original-title="Shared Globally" class=""><i class="fa fa-globe"></i></a></span>
                        <div class="clearfix mgbt-xs-10"></div>
                        <p class="mgbt-xs-20"> <img src="img/blog/03.jpg" class="img-right" alt="example image">Ut sit amet dignissim libero. Integer scelerisque, eros interdum suscipit rhoncus, mauris felis eleifend libero, a adipiscing arcu sapien eu nisi. Proin vehicula lacus non lacus lobortis ultricies. Nulla dui metus, viverra in sodales a, rutrum sed metus. Cras blandit vehicula ligula et fringilla. Suspendisse convallis rutrum arcu nec rutrum. Pellentesque sed felis ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum et sem eu eros fringilla bibendum quis non quam. Nunc tempor sodales tempus. <br>
                          <br>
                          Integer scelerisque, eros interdum suscipit rhoncus, mauris felis eleifend libero, a adipiscing arcu sapien eu nisi. Proin vehicula lacus non lacus lobortis ultricies. Nulla dui metus, viverra in sodales a, rutrum sed metus. Cras blandit vehicula ligula et fringilla. Suspendisse convallis rutrum arcu nec rutrum. Pellentesque sed felis ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum et sem eu eros fringilla bibendum quis non quam. Nunc tempor sodales tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum et sem eu eros fringilla bibendum quis non quam. Nunc tempor sodales tempus. </p>
                        <div class="tl-action"><a role="button" class="btn btn-sm mgr-10" href="javascript:void(0)"><i class="fa fa-thumbs-up fa-fw"></i> Like</a> <a role="button" class="btn btn-sm btn-xs mgr-10" href="javascript:void(0)"><i class="fa fa-comment fa-fw"></i> Comment</a> <a role="button" class="btn btn-sm " href="javascript:void(0)"><i class="fa fa-share fa-fw"></i> Share</a></div>
                      </div>
                      <!-- panel-body --> 
                    </div>
                    <!-- panel --> 
                  </li>
                  <li class="tl-item">
                    <div class="tl-icon primary"> <i class="fa fa-users"></i> </div>
                    <div class="tl-label panel widget light-widget panel-bd-left vd_bdl-black">
                      <div class="panel-body"> <img alt="example image" class="tl-img img-right img-circle  mgtp-5" src="img/avatar/avatar-5.jpg">
                        <h3 class="mgtp-10 mgbt-xs-5"> Rhonda William </h3>
                        <span class="vd_soft-grey">07.45 am </span>
                        <div class="clearfix mgbt-xs-10"></div>
                        <p class="mgbt-xs-20 font-bold"> Added new friends</p>
                        <div class="tl-post-friends">
                          <div class="content-grid column-xs-3 column-sm-4 column-md-5 column-lg-6 height-xs-3">
                            <ul class="list-wrapper">
                              <li> <a href="#">
                                <div class="menu-icon"><img alt="example image" src="img/avatar/avatar.jpg"></div>
                                </a>
                                <div class="menu-text"> Gabriella Montagna
                                  <div class="menu-info">
                                    <div class="menu-date">San Diego</div>
                                  </div>
                                </div>
                              </li>
                              <li> <a href="#">
                                <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>
                                </a>
                                <div class="menu-text"> Jonathan Fuzzy
                                  <div class="menu-info">
                                    <div class="menu-date">Seattle</div>
                                  </div>
                                </div>
                              </li>
                              <li> <a href="#">
                                <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-3.jpg"></div>
                                </a>
                                <div class="menu-text"> Sakura Hinata
                                  <div class="menu-info">
                                    <div class="menu-date">Hawaii</div>
                                  </div>
                                </div>
                              </li>
                              <li> <a href="#">
                                <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-4.jpg"></div>
                                </a>
                                <div class="menu-text"> Rikudou Sennin
                                  <div class="menu-info">
                                    <div class="menu-date">Las Vegas</div>
                                  </div>
                                </div>
                              </li>
                              <li> <a href="#">
                                <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-5.jpg"></div>
                                </a>
                                <div class="menu-text"> Kim Kardiosun
                                  <div class="menu-info">
                                    <div class="menu-date">New York</div>
                                  </div>
                                </div>
                              </li>
                              <li> <a href="#">
                                <div class="menu-icon"><img alt="example image" src="img/avatar/avatar-6.jpg"></div>
                                </a>
                                <div class="menu-text"> Brad Pita
                                  <div class="menu-info">
                                    <div class="menu-date">Seattle</div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>

                      </div>
                      <!-- panel-body --> 
                    </div>
                    <!-- panel --> 
                  </li>
                                                 
                                                </ul>
                                              </div>
                                              <div class="closing text-center">
                                                <a href="#">See All Recent Reviews <i class="fa fa-angle-double-right"></i></a>
                                              </div>                                                                                                            
                                            </div>                              

                                          </div>
                                          <div id="posts-tab" class="tab-pane sidebar-widget">
                                           <div class="content-list"> 
                                             <div data-rel="scroll">
                                               <ul  class="list-wrapper pd-lr-15">
                                                <li> <a href="#"> 
                                                  <div class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></div> 
                                                  <div class="menu-text"> Satyam liked your post
                                                    <div class="menu-info"><span class="menu-date"> ~ 12 Minutes Ago</span></div>
                                                  </div> 
                                                </a> </li>
                                                <li> <a href="#"> 
                                                  <div class="menu-icon vd_blue"><i class=" fa fa-user"></i></div> 
                                                  <div class="menu-text">  30 new comments on your post                                                    <div class="menu-info"><span class="menu-date"> ~ 1 Hour 20 Minutes Ago</span></div>
                                                  </div> 
                                                </a> </li>    
                                                <li> <a href="#"> 
                                                  <div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                                                  <div class="menu-text">  Your setting is updated
                                                    <div class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></div>                            
                                                  </div> 
                                                </a> </li>                                     
                                                <li> <a href="#"> 
                                                  <div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                                                  <div class="menu-text">  Added new article
                                                    <div class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></div>                              
                                                  </div> 
                                                </a> </li> 
                                                <li> <a href="#"> 
                                                  <div class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                                                  <div class="menu-text">  24 connections pendding !!
                                                    <div class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></div>                              
                                                  </div> 
                                                </a> </li>
                                                <li> <a href="#"> 
                                                  <div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                                                  <div class="menu-text">  Your setting is updated
                                                    <div class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></div>                            
                                                  </div> 
                                                </a> </li>                                     
                                                <li> <a href="#"> 
                                                  <div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                                                  <div class="menu-text">  Added new article
                                                    <div class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></div>                              
                                                  </div> 
                                                </a> </li> 
                                                <li> <a href="#"> 
                                                  <div class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                                                  <div class="menu-text">  20 people visited your profile
                                                    <div class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></div>                              
                                                  </div> 
                                                </a> </li>                                                                                
                                                
                                              </ul>
                                            </div>
                                            <div class="closing text-center" style="">
                                              <a href="#">See All Activities <i class="fa fa-angle-double-right"></i></a>
                                            </div>                                                                       
                                          </div>                              
                                        </div>
                                        <div id="list-tab" class="tab-pane">
                                         <div class="content-grid column-xs-2 column-sm-6 height-xs-3"> 
                                           <div data-rel="scroll" >
                                             <ul class="list-wrapper">
                                              <li> <a href="#"> 
                                                <div class="menu-icon width-50"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                                              </a>
                                              <div class="menu-text"> Gabriella Montagna
                                                <div class="menu-info">
                                                  <div class="menu-date">San Diego</div>                                                                         
                                                  <div class="menu-action">
                                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                                      <i class="fa fa-check"></i>
                                                    </span> 
                                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                                      <i class="fa fa-times"></i>
                                                    </span>                                                                                                                   
                                                  </div>                                
                                                </div>
                                              </div> 
                                            </li>
                                            <li> 
                                              <a href="#"> 
                                                <div class="menu-icon width-50"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>  
                                              </a>                            
                                              <div class="menu-text">  Jonathan Fuzzy
                                                <div class="menu-info">
                                                  <div class="menu-date">Seattle</div>                                                                         
                                                  <div class="menu-action">
                                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                                      <i class="fa fa-check"></i>
                                                    </span> 
                                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                                      <i class="fa fa-times"></i>
                                                    </span>                                                                            
                                                  </div>                                
                                                </div>                            
                                              </div> 
                                            </li>    
                                            <li> <a href="#"> 
                                              <div class="menu-icon width-50"><img alt="example image" src="img/avatar/avatar-3.jpg"></div> 
                                            </a>    
                                            <div class="menu-text">  Sakura Hinata
                                              <div class="menu-info">
                                                <div class="menu-date">Hawaii</div>                                                                         
                                                <div class="menu-action">
                                                  <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                                    <i class="fa fa-check"></i>
                                                  </span> 
                                                  <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                                    <i class="fa fa-times"></i>
                                                  </span>                                                                             
                                                </div>                                
                                              </div>                                                     
                                            </div> 
                                          </li>                                     
                                          <li> <a href="#"> 
                                            <div class="menu-icon width-50"><img alt="example image" src="img/avatar/avatar-4.jpg"></div> 
                                          </a>    
                                          <div class="menu-text">  Rikudou Sennin
                                            <div class="menu-info">
                                              <div class="menu-date">Las Vegas</div>                                                                         
                                              <div class="menu-action">
                                                <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                                  <i class="fa fa-check"></i>
                                                </span> 
                                                <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                                  <i class="fa fa-times"></i>
                                                </span>                                                                              
                                              </div>                                
                                            </div>                                                        
                                          </div> 
                                        </li> 
                                        <li> <a href="#"> 
                                          <div class="menu-icon width-50"><img alt="example image" src="img/avatar/avatar-5.jpg"></div>  
                                        </a>   
                                        <div class="menu-text">  Kim Kardiosun
                                          <div class="menu-info">
                                            <div class="menu-date">New York</div>                                                                         
                                            <div class="menu-action">
                                              <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                                <i class="fa fa-check"></i>
                                              </span> 
                                              <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                                <i class="fa fa-times"></i>
                                              </span>                                                                              
                                            </div>                                
                                          </div>                                                          
                                        </div> 
                                      </li>
                                      <li> <a href="#"> 
                                        <div class="menu-icon width-50"><img alt="example image" src="img/avatar/avatar-6.jpg"></div>
                                      </a>    
                                      <div class="menu-text">   Brad Pita
                                        <div class="menu-info">
                                          <div class="menu-date">Seattle</div>                                                                         
                                          <div class="menu-action">
                                            <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                              <i class="fa fa-check"></i>
                                            </span> 
                                            <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                              <i class="fa fa-times"></i>
                                            </span>                                                                              
                                          </div>                                
                                        </div>                             
                                      </div> 
                                    </li>                                     
                                    <li> <a href="#"> 
                                      <div class="menu-icon width-50"><img alt="example image" src="img/avatar/avatar-7.jpg"></div> 
                                    </a>   
                                    <div class="menu-text">  Celline Dior
                                      <div class="menu-info">
                                        <div class="menu-date">Los Angeles</div>                                                                         
                                        <div class="menu-action">
                                          <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-check"></i>
                                          </span> 
                                          <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-times"></i>
                                          </span>                                                                             
                                        </div>                                
                                      </div>                              
                                    </div> 
                                  </li> 
                                  <li> <a href="#"> 
                                    <div class="menu-icon width-50"><img alt="example image" src="img/avatar/avatar-8.jpg"></div>
                                  </a>    
                                  <div class="menu-text">  Goerge Bruno Marz
                                    <div class="menu-info">
                                      <div class="menu-date">Las Vegas</div>                                                                         
                                      <div class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                          <i class="fa fa-check"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                          <i class="fa fa-times"></i>
                                        </span>                                                                              
                                      </div>                                
                                    </div>                              
                                  </div> 
                                </li>                                                                                                   
                                
                              </ul>
                            </div>
                            <div class="closing text-center">
                              <a href="#">See All New Users <i class="fa fa-angle-double-right"></i></a>
                            </div>                                                                       
                          </div>      
                        </div>
                                          
                                          
                                                        <div id="project-tab" class="tab-pane">
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
                    </div> <!-- tabs-widget -->                  </div>
                    <!-- col-md-12 --> 
                  </div>
                  <!-- row --> 
                </div>

            <!--col-md-7 -->
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-12">
                  <div class="vd_status-widget vd_bg-green widget">
                    <div class="vd_panel-menu">
                      <div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="fa fa-refresh"></i> </div>
                    </div>
                    <!-- vd_panel-menu --> 
                    
                    <a class="panel-body" href="PostedJob.php">
                      <div class="clearfix">
                        <span class="menu-icon">
                          <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </span>
                        <span class="menu-value">
                          1,256,134
                        </span>  
                      </div>   
                      <div class="menu-text clearfix">
                        Total Visitors 
                      </div>                                                               
                    </a>        
                  </div>                    </div>
                  <!--col-md-12 --> 
                </div>
                <!-- .row -->
                              <div class="row">
                            
                            <div class="panel widget vd_pie-chart-widget">
                              <div class="panel-heading vd_bg-red">
                                <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-pie"></i> </span> Pie Chart </h3>
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
                              <div class="panel-body-list pd-15">
                                <div id="pie-chart" class="pie-chart" style="height:318px;"></div>
                              </div>
                            </div>
                          </div>
                        <!-- .row --> 
                        
                      </div>
                      <!-- .col-md-5 --> 
                    </div>
           <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header vd_bg-blue vd_white">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                          <h4 class="modal-title" id="myModalLabel">Feed Post</h4>
                        </div>
                        <div class="modal-body"> 
                        
                        
                        
                         <div >
    <div class="child-menu">  

     <textarea class="no-bd" rows="10" placeholder="What are you doing?" ></textarea>
     <div class="vd_textarea-menu vd_bg-yellow vd_bd-yellow" >
                                     <input class="form-control" type="text" placeholder="#tags">
       <ul class="nav nav-pills ">
        <li class="one-icon">
          <a data-toggle="tab-post" href="javascript:void(0);">
            <span class="menu-icon">
              <i class="fa fa-user fa-fw"></i>
            </span>
          </a>
        </li>
        <li class="one-icon">
          <a data-toggle="tab-post" href="javascript:void(0);">
            <span class="menu-icon">
              <i class="fa fa-camera fa-fw"></i>
            </span>
          </a>
        </li>   
        <li class="one-icon">
          <a data-toggle="tab-post" href="javascript:void(0);">
            <span class="menu-icon">
              <i class="fa fa-smile-o fa-fw"></i>
            </span>
          </a>
        </li>  
        <li class="pull-right">
          <a data-toggle="tab-post" href="javascript:void(0);" style="border-left:1px solid rgba(255,255,255,.3)">
            <span class="menu-icon">
              <i class="fa fa-check fa-fw"></i>
            </span>                             
            <span class="menu-text">
             Post
           </span>                              
         </a>
       </li>  
       
     </ul>

   </div>
              <div class="col-sm-12 controls">

                              </div>
 </div> <!-- child-menu -->                      
</div>
                                     
                        </div>
                        <div class="modal-footer background-login">
                          <button type="button" class="btn vd_btn vd_bg-grey" data-dismiss="modal">Close</button>
<!--                           <button type="button" class="btn vd_btn vd_bg-green">Save changes</button> -->
                        </div>
                      </div>
                      <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                  </div>
                  <div class="modal fade col-md-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header vd_bg-blue vd_white">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                          <h4 class="modal-title" id="myModalLabel">Job Post</h4>
                        </div>
                        <div class="modal-body"  data-rel="scroll" data-scrollheight="600"> 
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
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Job Details</h3>
<form class="form-horizontal">
                            
                            
                                                        <div class="form-group">
                              <label class="col-sm-3 control-label">Title<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Designation">
                              </div>

                            </div>
                            <br> <br>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Experience<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="">
                              
                              
                              
                                     <div class="col-xs-4">

                                    <select  id="degree_type_id" class="form-control" style="width:100%" name="degree_type_id"><option value="" selected="selected">Experince<i style="color: red">&nbsp;*&nbsp;</i> </option>
                                    <option value="1">0 - 1 Years</option>
                                    <option value="2">2 - 3 Years</option>
                                    <option value="3">3 - 4 Years</option>
                                    <option value="4">4 - 5 Years</option>
                                    <option value="5">5 - 6 Years</option>
                                    <option value="6">6 - 7 Years</option>
                                    <option value="7">7 - 8 Years</option>
                                    <option value="8">8 - 9 Years</option>
                                    <option value="9">10++</option>
   
        
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
                                <input class="form-control" type="text" placeholder="Designation">

                                  </div>
                                           
                              </div>

                            </div>
                            
                            <br> <br>
                                                                                    <div class="form-group">
                              <label class="col-sm-3 control-label">Number of positions<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Number of positions">
                              </div>

                            </div>
<br> <br>
                            
                                                                                                                <div class="form-group">
                              <label class="col-sm-3 control-label">Qualification<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                  <div class="col-xs-12">

                                    <select  id="degree_level_id" name="degree_level_id"><option value="" selected="selected">Select  Qualification</option>
                                    <option value="5">Doctorate/PhD</option>
                                    <option value="4">Post Graduation</option>
                                    <option value="3">Graduation</option>
                                    <option value="2">12th/O-Level</option>
                                    <option value="1">10th</option>
                                    
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
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Domain</option>
                                    <option value="1">IT</option>
                                    <option value="2">Non IT</option>

        
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
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Shift</option>
                                    <option value="1">Day Shift</option>
                                    <option value="2">Night Shift</option>
     <option value="2">Rotational Shift</option>
        
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
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select functional Area</option>
                                    <option value="1">Manager</option>
                                    <option value="2">Marketing</option>

        
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
                            
                                                        <div id="tags1584440712527_tagsinput" class="tagsinput" style="width: auto; height: 100px;">
                              <span class="tag"><span>Java&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                              <span class="tag"><span>PHP&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>Database&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>Design&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>UI & UX&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                              <div id="tags1584440712527_addTag"><input id="tags1584440712527_tag" value="" data-default="add a tag" style="color: rgb(102, 102, 102); width: 68px;"></div><div class="tags_clear"></div></div>


                                  </div>
                                  
                                                                             
                              </div>

                            </div>
                            
<br> <br>
                            
                                                                                                 <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 20px" >
                              <label class="col-sm-3 control-label">Gender<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                              
                              
                              
                       

                                  <!-- col-xs-12 -->
                            <div class="col-xs-12">
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="2">Any</option>
        
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
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Interview Type</option>
                                    <option value="1">Walk In</option>
                                    <option value="2">Third Party</option>
                                    <option value="2">Affiliate</option>
        
                                    </select>

                                  </div>
                                  
                                                                             
                              </div>

                            </div>
                            
                            <br> <br>
                            
                                                 <div class="form-group"  style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 20px">
                              <label class="col-sm-3 control-label">Job Summary<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">

                              
                                                              <textarea rows="3"  class="form-control" placeholder="Job Summary"></textarea>
                              </div>

                            </div>
                            <br> <br>
                                                                             <div class="form-group"  style="padding-top: 30px ; padding-bottom: 25px  ; margin-top: 20px">
                              <label class="col-sm-3 control-label">Job Description<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">

                              
                                                              <textarea rows="8"  class="form-control" placeholder="Job Description" ></textarea>
                              </div>

                            </div>
                            
                            
                            <br> <br>

<div style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 20px">
</div>
                            
                             <div class="form-group" style="padding-top: 30px ; padding-bottom: 10px  ; margin-top: 20px" >
                              <label class="col-sm-3 control-label">Schedule Post<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                              
                              
                              
                       

                                  <!-- col-xs-12 -->
                            <div class="col-xs-12">
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Schedule Post</option>
                                    <option value="1">Now</option>
                                    <option value="2">Date</option>

        
                                    </select>

                                  </div>
                                  
                                                                             
                              </div>

                            </div>
   <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                              <label class="col-sm-3 control-label">Search String<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Search String">
                              </div>

                            </div>
                            

                               <div class="form-group" style="padding-top: 20px ; padding-bottom: 40px  ; margin-top: 30px">
                              <label class="col-sm-3 control-label">Tag Group<i style="color: red">&nbsp;*&nbsp;</i></label>


                              <div class="col-sm-9 controls">
   <div id="tags1584440712527_tagsinput" class="tagsinput" style="width: auto; height: 100px;">
                              <span class="tag"><span>Recruiter&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                              <span class="tag"><span>HR&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>Vendor&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                         

                              <div id="tags1584440712527_addTag"><input id="tags1584440712527_tag" value="" data-default="add a tag" style="color: rgb(102, 102, 102); width: 68px;"></div><div class="tags_clear"></div></div>

                              </div>

                            </div>
                            
                            
                            
                          </form>
 <br><br>               <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px" >Next</button>
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
                                <input class="form-control" type="text" placeholder="Contact No">
                              </div>

                            </div>
                            
                                                        <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                              <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Email">
                              </div>

                            </div>
            
            
            
            
            
                                           <div class="form-group" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px">
                              <label class="col-sm-3 control-label">Add Other Recruiters<i style="color: red">&nbsp;*&nbsp;</i></label>


                              <div class="col-sm-9 controls">
                   <div id="tags1584440712527_tagsinput" class="tagsinput" style="width: auto; height: 100px;">
                              <span class="tag"><span>TSD&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                              <span class="tag"><span>Satyam&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>Varun&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>Thakur&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                              <span class="tag"><span>Seed&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>

                              <div id="tags1584440712527_addTag"><input id="tags1584440712527_tag" value="" data-default="add a tag" style="color: rgb(102, 102, 102); width: 68px;"></div><div class="tags_clear"></div></div>
                              </div>

                            </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px" >Next</button>
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
                                <input class="form-control" type="text" placeholder="Company Name">
                              </div>

                            </div>
            <br><br>
                  <div class="form-group">
                              <label class="col-sm-3 control-label">Number Of Employees<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Number Of Employees">
                              </div>

                            </div>
            <br><br>
            
                  <div class="form-group">
                              <label class="col-sm-3 control-label">Location<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Location">
                              </div>

                            </div>
            <br><br>
            
                  <div class="form-group">
                              <label class="col-sm-3 control-label">Website Link<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Website Link">
                              </div>

                            </div>
            <br><br>
                  <div class="form-group">
                              <label class="col-sm-3 control-label">Email<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Email">
                              </div>

                            </div>
            <br><br>
                  <div class="form-group">
                              <label class="col-sm-3 control-label">Domain<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">
                                                  <div class="col-xs-12">
                                    <select  id="degree_type_id" name="degree_type_id"><option value="" selected="selected">Select Domain</option>
                                    <option value="1">IT</option>
                                    <option value="2">Non IT</option>

        
                                    </select>

                                  </div>
                              </div>

                            </div>
            <br><br>
                                                 <div class="form-group">
                              <label class="col-sm-3 control-label"> Description<i style="color: red">&nbsp;*&nbsp;</i></label>
                              <div class="col-sm-9 controls">

                              
                                                              <textarea rows="8"  class="form-control" placeholder="Company Description" ></textarea>
                              </div>

                            </div>
            <br><br>
            
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px" >Next</button>
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
                                <input class="form-control" type="text" placeholder="Questionnaires #1">
                              </div>

                            </div>
            <br><br>
                                      <div class="form-group">
                              <label class="col-sm-3 control-label">Questionnaires #2</label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Questionnaires #2">
                              </div>

                            </div>
            <br><br>
                                      <div class="form-group">
                              <label class="col-sm-3 control-label">Questionnaires #3</label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Questionnaires #3">
                              </div>

                            </div>
            <br><br>
                                      <div class="form-group">
                              <label class="col-sm-3 control-label">Questionnaires #4</label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Questionnaires #4">
                              </div>

                            </div>
            <br><br>
                                      <div class="form-group">
                              <label class="col-sm-3 control-label">Questionnaires #5</label>
                              <div class="col-sm-9 controls">
                                <input class="form-control" type="text" placeholder="Questionnaires #5">
                              </div>

                            </div>
            <br><br>
            
                            <button  type="button"  >Add More</button>

            
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" style="padding-top: 20px ; padding-bottom: 10px  ; margin-top: 30px" >Finish</button>
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
      
      					<div class="row">
                        
                          <!-- Modal -->
                  <!-- /.modal --> 
						<div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
							<div class="vd_status-widget vd_bg-blue widget">
								<div class="vd_panel-menu">
									<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
								</div>
								<!-- vd_panel-menu --> 

								<a class="panel-body" href="PostedJob.php">
									<div class="clearfix">
										<span class="menu-icon">
											<i class="fa fa-inr" aria-hidden="true"></i>
										</span>
										<span class="menu-value">
											1,088
										</span>  
									</div>   
									<div class="menu-text clearfix">
										Posted Jobs
									</div>                                                               
								</a>        
							</div>                </div>
							<div class="col-lg-3 col-md-6 col-sm-6 mgbt-sm-15">
								<div class="vd_status-widget vd_bg-green widget">
									<div class="vd_panel-menu">
										<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
									</div>
									<!-- vd_panel-menu --> 

									<a class="panel-body" href="sharedjob.php">
										<div class="clearfix">
											<span class="menu-icon">
												<i class="fa fa-id-card-o" aria-hidden="true"></i>
											</span>
											<span class="menu-value">
												64
											</span>  
										</div>   
										<div class="menu-text clearfix">
											Shared Jobs 
										</div>                                                               
									</a>        
								</div>                </div>
								<div class="col-lg-3 col-md-6 col-sm-6 mgbt-xs-15">
									<div class="vd_status-widget vd_bg-yellow widget">
										<div class="vd_panel-menu">
											<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
										</div>
										<!-- vd_panel-menu --> 

										<a class="panel-body" href="Postedfreelancingjob.php">
											<div class="clearfix">
												<span class="menu-icon">
													<i class="fa fa-flag-checkered" aria-hidden="true"></i>
												</span>
												<span class="menu-value">
													24
												</span>  
											</div>   
											<div class="menu-text clearfix">
												Freelancing Jobs
											</div>                                                               
										</a>        
									</div>                </div>
									<div class="col-lg-3 col-md-6 col-sm-6 mgbt-xs-15">
										<div class="vd_status-widget vd_bg-red widget">
											<div class="vd_panel-menu">
												<div data-action="refresh" data-original-title="Refresh" data-rel="tooltip" class=" menu entypo-icon smaller-font"> <i class="icon-cycle"></i> </div>
											</div>
											<!-- vd_panel-menu --> 

											<a class="panel-body" href="postedaffiliatejob.php">
												<div class="clearfix">
													<span class="menu-icon">
														<i class="fa fa-snowflake-o" aria-hidden="true"></i>
													</span>
													<span class="menu-value">
														78
													</span>  
												</div>   
												<div class="menu-text clearfix">
													Affiliate Jobs
												</div>                                                               
											</a>        
										</div>                </div>
									</div>      
      <!-- till here --> 
                        <div class="row">
                          <div class="col-md-6  mgbt-xs-20 mgbt-md-0">
                            
                            <div class="panel widget light-widget panel-bd-top">
                              <div class="panel-body">
                                <div id="calendar" class="mgtp-10"> </div>
                              </div>
                            </div>
                            <!-- Panel Widget -->              </div>
                            <!-- col-md-6 -->
                                      <div class="col-md-6 mgbt-md-20 mgbt-lg-0">
            <div class="panel vd_interactive-widget light-widget widget">
              <div class="panel-body-list">
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
                
                
                <div class="pd-20">
                  <h5 class="mgbt-xs-20 mgtp-20"><span class="menu-icon append-icon"><i class="icon-graph"></i></span> <strong>Impression on Ad Posts</strong> (November) </h5>
                  <div id="revenue-line-chart" style="height:370px; "></div>
                </div>
                <div class="row mgbt-xs-0">
                  <div class="col-sm-4 mgbt-xs-15 mgbt-sm-0">
                    <div class="item-left pd-15">
                      <div id="revenue-donut-chart" style="height:100px;"></div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="item-right pd-15">
                      <div id="revenue-bar-chart" style="height: 100px;" > </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Panel Widget -->               </div>

              </div>
              <!-- .row -->
      
      

                    <div class="row">
                      <div class="col-md-5">
                        
                        <div class="panel vd_map-widget widget">
                          <div class="panel-heading vd_bg-yellow">
                            <h3 class="panel-title"> <span class="menu-icon"> <i class="glyphicon glyphicon-map-marker"></i> </span> <span class="menu-text">Visitor Map</span> </h3>
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
                        
                          </div>
                          <div class="panel-body-list">
                            <div id="map1" style="height: 348px;"></div>
                            <div class="vd_info br" >
                              <h5 class="text-right font-semibold"><strong>TOTAL VISITS</strong></h5>
                              <h3 class="text-right  vd_red"><span class="append-icon"><i class="fa fa-map-marker"></i></span>3,546,456</h3>
                            </div>
                          </div>
                        </div>
                        </div>
                                    <div class="col-md-3">

              <div class="panel widget panel-bd-top vd_todo-widget light-widget">
                <div class="panel-heading no-title ">
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
                <div class="panel-body">
                  <h2 class="mgbt-xs-20"> <span class="append-icon"> <i class="fa fa-check-circle-o vd_green"></i> </span> Todo List</h2>
                  <div class="input-group mgbt-xs-15">
                    <input type="text">
                    <div class="input-group-btn">
                      <button data-toggle="dropdown" class="btn dropdown-toggle vd_bg-green vd_white" type="button"><i class="fa fa-plus fa-fw"></i></button>
                    </div>
                    <!-- /btn-group --> 
                  </div>
                  <div class="controls">
                    <div class="vd_checkbox checkbox-done">
                      <input type="checkbox" id="checkbox-1" value="1">
                      <label for="checkbox-1"> Basketball time </label>
                    </div>
                    <div class="vd_checkbox  checkbox-done">
                      <input type="checkbox" id="checkbox-2" value="1">
                      <label for="checkbox-2"> Design Logo for customer</label>
                    </div>
                    <div class="vd_checkbox  checkbox-done">
                      <input type="checkbox" id="checkbox-3" value="1">
                      <label for="checkbox-3"> Cooking delicious meal</label>
                    </div>
                    <div class="vd_checkbox  checkbox-done">
                      <input type="checkbox" id="checkbox-4" value="1">
                      <label for="checkbox-4"> Sleeping with my pillow</label>
                    </div>
                    <div class="row mgtp-15 mgbt-xs-0">
                      <div class="col-xs-6"> <a role="button" href="#" class="btn vd_btn vd_bg-green">Save</a> </div>
                      <div class="col-xs-6 text-right"> <a role="button" href="#" class="btn vd_btn vd_bg-grey"><i class="icon-trash"></i></a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Panel Widget -->               </div>
              <!-- col-md-4 -->
              <div class="col-md-4" >

                <div class="panel widget vd_news-widget">
                  <div class="panel-body-list">
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
                    
                    <div class="vd_carousel-control"> <a href="#"> <i class="fa fa-chevron-left"></i></a> <a href="#"><i class="fa fa-chevron-right"></i></a> </div>
                    <div class="vd_carousel">
                      <div class="vd_carousel-column" style="background:url(img/photos/news-blur.jpg);">
                        <div class="news-list pd-20 vd_white font-light"> <br />
                          <br />
                          <br />
                          <br />
                          <h2 class="mgbt-xs-5"><a class="vd_white" href="#">Minimalist <span class="font-semibold">News Widget</span> is a <span class="font-semibold">Massively</span> Popular Widget.</a></h2>
                          <p> <span class="mgr-10"><span class="append-icon"><i class="fa fa-thumbs-up"></i></span>95k</span> <span class="append-icon"><i class="fa fa-comments"></i></span>138 </p>
                        </div>
                        <div class="comment-list pd-20 vd_bg-white">
                          <div class="content-list content-image ">
                            <div class="list-wrapper">
                              <div class="comment-content">
                                <div class="menu-icon"><a href="#"><img src="img/avatar/avatar.jpg" alt="example image"></a></div>
                                <div class="menu-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed... Unbelievable !!</div>
                                <div class="menu-text">
                                  <div class="menu-info"> by <a href="#">Lindsay Louhin</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                </div>
                              </div>
                            </div>
                            <!-- list-wrapper --> 
                          </div>
                          <!-- content-list --> 
                        </div>
                        <!-- comment-list --> 
                        
                      </div>
                      <!-- carousel-column -->
                      
                      <div class="vd_carousel-column" style="background:url(img/photos/news-blur-02.jpg);">
                        <div class="news-list pd-20 vd_white  font-light"> <br />
                          <br />
                          <br />
                          <br />
                          <h2 class="mgbt-xs-5"><a class="vd_white" href="#">Sliding<span class="font-semibold"> News List</span> is <span class="font-semibold">Totally</span> Awesome.</a></h2>
                          <p> <span class="mgr-10"><span class="append-icon"><i class="fa fa-thumbs-up"></i></span>15k</span> <span class="append-icon"><i class="fa fa-comments"></i></span>40 </p>
                        </div>
                        <div class="comment-list pd-20 vd_bg-white">
                          <div class="content-list content-image ">
                            <div class="list-wrapper">
                              <div class="comment-content">
                                <div class="menu-icon"><a href="#"><img src="img/avatar/avatar-2.jpg" alt="example image"></a></div>
                                <div class="menu-text"> Consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco. Awesome ! </div>
                                <div class="menu-text">
                                  <div class="menu-info"> by <a href="#">Gregory Theo</a> - <span class="menu-date">18 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                </div>
                              </div>
                            </div>
                            <!-- list-wrapper --> 
                          </div>
                          <!-- content-list --> 
                        </div>
                        <!-- comment-list --> 
                        
                      </div>
                      <!-- carousel-column -->
                      
                      <div class="vd_carousel-column" style="background:url(img/photos/news-blur-03.jpg);">
                        <div class="news-list pd-20 vd_white font-light"> <br />
                          <br />
                          <br />
                          <br />
                          <h2 class="mgbt-xs-5"><a class="vd_white" href="#">More than <span class="font-semibold"> 3 News List</span> or more <span class="font-semibold">With</span> This Widget.</a></h2>
                          <p> <span class="mgr-10"><span class="append-icon"><i class="fa fa-thumbs-up"></i></span>23k</span> <span class="append-icon"><i class="fa fa-comments"></i></span>8 </p>
                        </div>
                        <div class="comment-list pd-20 vd_bg-white">
                          <div class="content-list content-image ">
                            <div class="list-wrapper">
                              <div class="comment-content">
                                <div class="menu-icon"><a href="#"><img src="img/avatar/avatar-3.jpg" alt="example image"></a></div>
                                <div class="menu-text"> Lorem ipsum dolor sit amet, sed do eiusmod tempor incidtation ullamco. </div>
                                <div class="menu-text">
                                  <div class="menu-info"> by <a href="#">Maria Looney</a> - <span class="menu-date">12 Minutes Ago </span> - <span class="menu-rating vd_yellow"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> </div>
                                </div>
                              </div>
                            </div>
                            <!-- list-wrapper --> 
                          </div>
                          <!-- content-list --> 
                        </div>
                        <!-- comment-list --> 
                        
                      </div>
                      <!-- carousel-column --> 
                    </div>
                    <!-- vd_carousel --> 
                    
                  </div>
                  <!-- panel-body-list --> 
                  
                </div>
                <!-- Panel Widget -->               </div>
                <!-- col-md-4 --> 
                        <div class="col-md-4" style="visibility:hidden">
                          
                          <div class="panel widget vd_realtime-chart-widget">
                            <div class="panel-heading vd_bg-blue">
                              <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-graph"></i> </span> Server Load </h3>
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
                        
                              
                            </div>
                            <div class="panel-body-list pd-15">
                              <div id="realtime-chart" class="realtime-chart" style="height:318px;"></div>
                            </div>
                          </div>
                                         </div>
                          
                          <div class="col-md-3" style="visibility:hidden">
                            
                            <div class="panel widget vd_pie-chart-widget">
                              <div class="panel-heading vd_bg-red">
                                <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-pie"></i> </span> Pie Chart </h3>
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
                            
                                
                              </div>
                              <div class="panel-body-list pd-15">
                                <div id="pie-chart" class="pie-chart" style="height:318px;"></div>
                              </div>
                            </div>
                          </div>

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

            <?php
            include_once('footer.php');
            ?>