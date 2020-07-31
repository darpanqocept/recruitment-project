<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
@include('web.layouts.header')

<body>

<!--Header-->
@include('web.include.header-nav')
<!-- /header -->

<!--Slider-->
@include('web.include.slider')
<!--/Slider-->

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h3 class="no-margin" >CephZone Job Portal + CephZone CRM = Work Efficiency</h3>

            </div>
            <div class="span2">
                <a class="btn btn-success btn-large pull-right" href="http://beta1.cephzone.com/czCRM/d.html" target="_blank">Job Portal</a>

            </div>
            <div class="span2">
                <a class="btn btn-success btn-large pull-right" href="czCRM/pages-register.html">&nbsp;&nbsp;&nbsp;&nbsp;CRM&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
            <div class="span2">
                <a class="btn btn-success btn-large pull-right" data-toggle="modal" href="#loginForm"  >&nbsp;Free Job Post&nbsp;</a>
            </div>
        </div>
    </div>
    <!--      <form>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <div class="input-group">
        <span class="input-group-addon">Text</span>
        <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
      </div>
    </form>  -->
</section>
<div>


</div>



<section id="Jobs">

    <!------ Include the above in your HEAD tag ---------->
    <style >

        img{max-width:100%;}
        *{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
        .my-list {
            width: 100%;
            padding: 10px;
            border: 1px solid #f5efef;
            float: left;
            margin: 15px 0;
            border-radius: 5px;
            box-shadow: 2px 3px 0px #e4d8d8;
            position:relative;
            overflow:hidden;
        }
        .my-list h3{
            text-align: left;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            margin: 0px;
            padding: 0px;
            border-bottom: 1px solid #ccc4c4;
            margin-bottom: 5px;
            padding-bottom: 5px;
        }
        .my-list span{float:left;font-weight: bold;}
        .my-list span:last-child{float:right;}
        .my-list .offer{
            width: 100%;
            float: left;
            margin: 5px 0;
            border-top: 1px solid #ccc4c4;
            margin-top: 5px;
            padding-top: 5px;
            color: #afadad;
        }
        .detail {
            position: absolute;
            top: -100%;
            left: 0;
            text-align: center;
            background: #fff;height: 100%;width:100%;

        }

        .my-list:hover .detail{top:0;}
    </style>

    <div class="container">

        <style >

            img{max-width:100%;}
            *{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
            .my-list {
                width: 100%;
                padding: 10px;
                border: 1px solid #f5efef;
                float: left;
                margin: 15px 0;
                border-radius: 5px;
                box-shadow: 2px 3px 0px #e4d8d8;
                position:relative;
                overflow:hidden;
            }
            .my-list h3{
                text-align: left;
                font-size: 14px;
                font-weight: 500;
                line-height: 21px;
                margin: 0px;
                padding: 0px;
                border-bottom: 1px solid #ccc4c4;
                margin-bottom: 5px;
                padding-bottom: 5px;
            }
            .my-list span{float:left;font-weight: bold;}
            .my-list span:last-child{float:right;}
            .my-list .offer{
                width: 100%;
                float: left;
                margin: 5px 0;
                border-top: 1px solid #ccc4c4;
                margin-top: 5px;
                padding-top: 5px;
                color: #afadad;
            }
            .detail {
                position: absolute;
                top: -100%;
                left: 0;
                text-align: center;
                background: #fff;height: 100%;width:100%;

            }

            .my-list:hover .detail{top:0;}
        </style>

        <div class="container">
            <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">IIT / IIM Jobs</button>
                <button class="btn btn-default filter-button" data-filter="hdpe">Non-It Jobs</button>
                <button class="btn btn-default filter-button" data-filter="sprinkle">Government Jobs</button>
                <button class="btn btn-default filter-button" data-filter="spray">International Jobs</button>
                <button class="btn btn-default filter-button" data-filter="irrigation">All Jobs</button>
            </div>
            <script >

                $(document).ready(function(){

                    $(".filter-button").click(function(){
                        var value = $(this).attr('data-filter');

                        if(value == "all")
                        {
                            //$('.filter').removeClass('hidden');
                            $('.filter').show('1000');
                        }
                        else
                        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                            $(".filter").not('.'+value).hide('3000');
                            $('.filter').filter('.'+value).show('3000');

                        }
                    });

                    if ($(".filter-button").removeClass("active")) {
                        $(this).removeClass("active");
                    }
                    $(this).addClass("active");

                });

            </script>
            <div class="row-fluid">


                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>





            </div>

            <div class="row-fluid">
                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>





            </div>
            <div class="row-fluid">
                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>

                <div class="span4">
                    <div class="my-list">
                        <div class="span2">
                            <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                        </div>
                        <div class="span10">
                            <h2>Full Stack Designer </h2>
                            <h3>Wizrich (Internship) - Mumbai 401209</h3>
                            <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                        </div>

                        <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                        <div class="offer">Posted By Rishabh Thakur </div>
                        <div class="detail"><br>
                            <p>Full Stack Designer</p>
                            <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                            <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                            <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                            <a href="#" class="btn btn-info">View Job Deatil</a>
                        </div>
                    </div>
                </div>





            </div>

        </div>

</section>
<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>What We Offer</h3>
            <p class="lead"></p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h3>Introductory Consultation</h3>
                        <h5 class="media-heading">Know how to do it</h5>
                        <p>The “glamour” associated with the world of consulting tends to eclipse the realities of the profession. Facts associated with this seemingly mysterious line of work are frequently substituted by hearsay, and reality takes a backseat to gossip and rumor. The primary intent of this series is to lay out the bare facts of the world of consulting. Given the medium, space, likely audience, and scope, this series will be introductory and basic in nature.

                            ?

                            In its simplest form, consulting is the business or act of coming up with a solutions to real world business situations or problems. Often such solutions take the form of advice offered by specialists in their respective fields.

                            ?

                            We say we are thier!!!.

                            <!--                         <a href="Introductory_Consultation.html">Know More</a> -->

                        </p>
                    </div>
                </div>
            </div>

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-thumbs-up-alt icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h3>Branding and Positioning </h3>
                        <h5>Grow Your Business</h5>
                        <p>Brand Positioning can be defined as the positioning strategy of the brand with the goal to create a unique impression in the minds of the customers and at the marketplace. The Brand Positioning has to be desirable, specific, clear, and distinctive in nature from the rest of the competitors in the market.

                            ?

                            Effective brand positioning enables a firm’s brand to be readily distinguishable from competing brands in the marketplace. Distinguishing the brand from other brands can be in terms of associated brand attributes, benefits to users, and/or market segment emphasis, among other factors. Effective brand positioning further emphasizes elements of superiority along one or more distinguishing dimensions which are valued by consumers.



                            <!--                         <a href="BrandingandPositioninganalysis.html">Know More</a>
                                                 -->


                        </p>
                    </div>
                </div>
            </div>

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-leaf icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h3>Designing & Development</h3>
                        <h5>Appearance, Speed, Strong, Safe</h5>
                        <p>Looking to develop your business but not sure where to turn? Need help planning or executing your next project? Let us guide you. Any organization can move forward with small incremental changes, but building for the future in today’s rapidly evolving environment means taking bold chances and making insightful decisions.

                            ?
                            Website brings you and your business to come in vision of spectators, it gives you ranking in the bar of all your competitors, it is a best tool for marketing and sales that can aid your business to grow fast in the easiest way, it is the most quicker and effective professional source to reach out your targeted viewers.A website in the most suitable way to your business.
                            <!--                         <a href="Designing_Development.html">Know More</a>
                                                 -->
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-shopping-cart icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h3>Service, Support and Information</h3>
                        <h5>Trust, Respect, Happiness.</h5>
                        <p>Customer support is a range of customer services to assist customers in making cost effective and correct use of a product. It includes assistance in planning, installation, training, troubleshooting, maintenance, upgrading, and disposal of a product.

                            ?

                            Customers spend a lot of time searching--whether on Google, in a store, or in the recesses of their minds, they're looking for the right answer, guidance or the fastest way to get something done.

                            ?
                            <br>
                            That's what needed to be done!!!!

                            <!--                         <a href="Service_Support_and_Information.html">Know More</a>
                                                 -->

                        </p>
                    </div>
                </div>
            </div>

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h3>Sales & Marketing</h3>
                        <h5>Presentation, Leads, Revenue</h5>
                        <p>No matter how competitive a particular industry may be, the essential will always be the collaboration and sharing of interests between the different parties. So, more than ever, it is absolutely crucial to exceed consumer expectations through innovative strategies that will ensure competitive advantages. Therefore, the maintenance and creation of good customer relationships have been a priority for every business as well as understanding which factors influence loyalty.


                            <!--                         <a href="Sales_and_Marketing.html">Know More</a>
                                                 -->

                        </p>
                    </div>
                </div>
            </div>

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h3>Recruitment</h3>
                        <h5>Choose the perfection.</h5>
                        <p>A positive process of searching for prospective employees and stimulating them to apply for the jobs in the organisation. When more persons apply for jobs then there will be a scope for recruiting better persons. Recruitment is concerned with reaching out, attracting, and ensuring a supply of qualified personnel and making out selection of requisite manpower both in their quantitative and qualitative aspect. It is the development and maintenance of adequate man- power resources. This is the first stage of the process of selection and is completed with placement.

                            <!--                         <a href="Target_and_Network.html">Know More</a>
                                                 -->
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>
        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-shopping-cart icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h3>Training & Retaining</h3>
                        <h5>Reach your potential, And regain.</h5>
                        <p>

                            ?

                            The convenience offered by new training modalities, such as eLearning and remote participation, has led to learners attending training from less-than-ideal locations. Work demands, telephone calls, texts and email are just a few of the distractions that impede a learner’s ability to focus on training and retain information.

                            <!--                         <a href="Training_and_Retaining.html">Know More</a>
                                                 -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h3>Strategic Planning</h3>
                        <h5>Expert Guidance</h5>
                        <p>We examine what organizations are doing to stay relevant and competitive in this fast-paced world, and which ones are doing it best. We then strategize using smart tools and global resources in order to understand the implications of every choice our clients can make. Get in touch to learn more about how this service can help you.


                            With years of experience, our staff has the capabilities and expertise to take your business to the next level. At cephzone.com, we combine our insights and skills to transform your processes and strategies, and in turn, your company. We’re proud to help shape and improve how our clients structure and manage their business.

                            <!--                         <a href="Strategic_Planning.html">Know More</a>
                                                 -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h3>Target & Network</h3>
                        <h5>Be the needed</h5>
                        <p>The human brain is wired to forget. Not all information is needed beyond the immediate moment or situation. It’s up to instructional designers and training facilitators to help learners maximize knowledge retention. Memory is essentially the process of encoding (inputting), storing (organizing) and recalling (accessing) information, and there are tactics that can be used in deliverables to reinforce these functions.

                            ?



                            <!--                         <a href="Target_and_Network.html">Know More</a>
                                                 -->

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->
<section id="Users">


    <!------ Include the above in your HEAD tag ---------->
    <style >

        img{max-width:100%;}
        *{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
        .my-list {
            width: 100%;
            padding: 10px;
            border: 1px solid #f5efef;
            float: left;
            margin: 15px 0;
            border-radius: 5px;
            box-shadow: 2px 3px 0px #e4d8d8;
            position:relative;
            overflow:hidden;
        }
        .my-list h3{
            text-align: left;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            margin: 0px;
            padding: 0px;
            border-bottom: 1px solid #ccc4c4;
            margin-bottom: 5px;
            padding-bottom: 5px;
        }
        .my-list span{float:left;font-weight: bold;}
        .my-list span:last-child{float:right;}
        .my-list .offer{
            width: 100%;
            float: left;
            margin: 5px 0;
            border-top: 1px solid #ccc4c4;
            margin-top: 5px;
            padding-top: 5px;
            color: #afadad;
        }
        .detail {
            position: absolute;
            top: -100%;
            left: 0;
            text-align: center;
            background: #fff;height: 100%;width:100%;

        }

        .my-list:hover .detail{top:0;}
    </style>

    <div class="container">
        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Job Seeker</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Recruiter</button>
            <button class="btn btn-default filter-button" data-filter="spray">Freelancer</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Company</button>
        </div>
        <script >

            $(document).ready(function(){

                $(".filter-button").click(function(){
                    var value = $(this).attr('data-filter');

                    if(value == "all")
                    {
                        //$('.filter').removeClass('hidden');
                        $('.filter').show('1000');
                    }
                    else
                    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                        $(".filter").not('.'+value).hide('3000');
                        $('.filter').filter('.'+value).show('3000');

                    }
                });

                if ($(".filter-button").removeClass("active")) {
                    $(this).removeClass("active");
                }
                $(this).addClass("active");

            });

        </script>
        <div class="row-fluid">

            <div class="span4 filter hdpe">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/employee.jpg')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Satyam Singh Rishabh </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-left  ">Current : Infosys Infosolution <br> Previous : Infosys Infosolution <br>Education: B.Sc(Computer Science)<br>Pre-Locations: Mumbai, Hyderabad, Pune </span>
                    <div class="offer">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Satyam Singh Rishabh</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">ssatyam@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter hdpe">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/employee.jpg')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Satyam Singh Rishabh </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-left  ">Current : Infosys Infosolution <br> Previous : Infosys Infosolution <br>Education: B.Sc(Computer Science)<br>Pre-Locations: Mumbai, Hyderabad, Pune </span>
                    <div class="offer">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Satyam Singh Rishabh</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">ssatyam@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter hdpe">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/employee.jpg')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Satyam Singh Rishabh </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-left  ">Current : Infosys Infosolution <br> Previous : Infosys Infosolution <br>Education: B.Sc(Computer Science)<br>Pre-Locations: Mumbai, Hyderabad, Pune </span>
                    <div class="offer">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Satyam Singh Rishabh</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">ssatyam@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row-fluid">
            <div class="span4 filter irrigation">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Microsoft Inc </h3>
                        <h3>Established In <i style="text-align: right"> 1986</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >Type :</b> MNC(IT) </h3>
                    </div>

                    <span class="pull-left  ">Current Jobs: 55 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Total Employees
                     : 601-1000  <br>Industry: 
                     Internet/E-commerce , IT/Computers - Software , Engineering & Design<br>Function: 
                 IT , IT/Software Development - Application Programming/Maintenance </span>
                    <div class="offer">Branches: Mumbai, Hyderabad, Pune <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Microsoft Inc</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">info-micro@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p>
                        <p style="font-size: 16px">www.microsoft.com&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Visit&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter irrigation">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Microsoft Inc </h3>
                        <h3>Established In <i style="text-align: right"> 1986</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >Type :</b> MNC(IT) </h3>
                    </div>

                <span class="pull-left  ">Current Jobs: 55 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Total Employees
                 : 601-1000  <br>Industry: 
                 Internet/E-commerce , IT/Computers - Software , Engineering & Design<br>Function: 
             IT , IT/Software Development - Application Programming/Maintenance </span>
                    <div class="offer">Branches: Mumbai, Hyderabad, Pune <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Microsoft Inc</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">info-micro@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p>
                        <p style="font-size: 16px">www.microsoft.com&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Visit&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter irrigation">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Microsoft Inc </h3>
                        <h3>Established In <i style="text-align: right"> 1986</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >Type :</b> MNC(IT) </h3>
                    </div>

            <span class="pull-left  ">Current Jobs: 55 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Total Employees
             : 601-1000  <br>Industry: 
             Internet/E-commerce , IT/Computers - Software , Engineering & Design<br>Function: 
         IT , IT/Software Development - Application Programming/Maintenance </span>
                    <div class="offer">Branches: Mumbai, Hyderabad, Pune <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Microsoft Inc</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">info-micro@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p>
                        <p style="font-size: 16px">www.microsoft.com&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Visit&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row-fluid">
            <div class="span4 filter spray">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/free.jpg')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Anurag Singh </h3>
                        <h3>Experience <i style="text-align: right"> 6 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 1,000 P.H. </h3>
                    </div>

                    <span class="pull-left  ">Current : FreeLancer <br> Previous : TCS Infosolution <br>Education: B.Sc(Computer Science)<br>Projects: 344 Projects </span>
                    <div class="offer">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Anurag Singh</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">anurag@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter spray">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/free.jpg')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Anurag Singh </h3>
                        <h3>Experience <i style="text-align: right"> 6 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 1,000 P.H. </h3>
                    </div>

                    <span class="pull-left  ">Current : FreeLancer <br> Previous : TCS Infosolution <br>Education: B.Sc(Computer Science)<br>Projects: 344 Projects </span>
                    <div class="offer">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Anurag Singh</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">anurag@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter spray">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/free.jpg')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Anurag Singh </h3>
                        <h3>Experience <i style="text-align: right"> 6 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 1,000 P.H. </h3>
                    </div>

                    <span class="pull-left  ">Current : FreeLancer <br> Previous : TCS Infosolution <br>Education: B.Sc(Computer Science)<br>Projects: 344 Projects </span>
                    <div class="offer">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Anurag Singh</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">anurag@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row-fluid">

            <div class="span4 filter sprinkle">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled2.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Advet Singh Thakur </h3>
                        <h3>Experience <i style="text-align: right"> 6 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-left  ">Current : Bank Of America <br> Previous : Infosys Infosolution <br>Education: B.Sc(Computer Science)<br>Pre-Locations: Mumbai, Hyderabad, Pune </span>
                    <div class="offer">Skills:
                        Recruitment Executive, Recruitment, Staffing, Out-Sourcing, Recruiter, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Advet Singh Thakur</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">advetthakur@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>


            <div class="span4 filter sprinkle">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled2.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Advet Singh Thakur </h3>
                        <h3>Experience <i style="text-align: right"> 6 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-left  ">Current : Bank Of America <br> Previous : Infosys Infosolution <br>Education: B.Sc(Computer Science)<br>Pre-Locations: Mumbai, Hyderabad, Pune </span>
                    <div class="offer">Skills:
                        Recruitment Executive, Recruitment, Staffing, Sourcing, Recruiter, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Advet Singh Thakur</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">advetthakur@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter sprinkle">
                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled2.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Advet Singh Thakur </h3>
                        <h3>Experience <i style="text-align: right"> 6 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-left  ">Current : Bank Of America <br> Previous : Infosys Infosolution <br>Education: B.Sc(Computer Science)<br>Pre-Locations: Mumbai, Hyderabad, Pune </span>
                    <div class="offer">Skills:
                        Recruitment Executive, Recruitment, Staffing, Out-Sourcing, Recruiter, <a href="#"> More</a></div>


                    <div class="detail"><br>
                        <p>Advet Singh Thakur</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">advetthakur@gmail.com &nbsp;&nbsp;<a href="#" class="btn btn-info">Send Mail</a></p>
                        <p style="font-size: 16px">+91 123456789&nbsp;&nbsp;<a href="#" class="btn btn-info">&nbsp;&nbsp;Call&nbsp;&nbsp;</a></p><br>

                        <a href="#" class="btn btn-info">View Deatil</a>&nbsp;<a href="#" class="btn btn-info">Connect</a>
                    </div>
                </div>
            </div>


        </div>

    </div>

</section>
<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3>Our Blogs</h3>
            <p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>
        </div>
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="{{URL::to('web/images/portfolio/thumb/item1.jpg')}}">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{URL::to('web/images/portfolio/full/item1.jpg')}}" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>
            <!--/Item 1-->

            <!--Item 2-->
            <li>
                <div class="preview">
                    <img alt=" " src="{{URL::to('web/images/portfolio/thumb/item2.jpg')}}">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{URL::to('web/images/portfolio/full/item2.jpg')}}" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <li>
                <div class="preview">
                    <img alt=" " src="{{URL::to('web/images/portfolio/thumb/item3.jpg')}}">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-3" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{URL::to('web/images/portfolio/full/item3.jpg')}}" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>
            <!--/Item 3-->

            <!--Item 4-->
            <li>
                <div class="preview">
                    <img alt=" " src="{{URL::to('web/images/portfolio/thumb/item4.jpg')}}">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="desc">
                    <h5>Lorem ipsum dolor sit amet</h5>
                </div>
                <div id="modal-4" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="{{URL::to('web/images/portfolio/full/item4.jpg')}}" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>
            </li>
            <!--/Item 4-->

        </ul>
    </div>

</section>

<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">OUR PARTNERS</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <div class="row-fluid">
                                <ul class="thumbnails">
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client1.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client2.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client3.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client4.png')}}"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row-fluid">
                                <ul class="thumbnails">
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client4.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client3.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client2.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client1.png')}}"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row-fluid">
                                <ul class="thumbnails">
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client1.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client2.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client3.png')}}"></a></li>
                                    <li class="span3"><a href="#"><img src="{{URL::to('web/images/sample/clients/client4.png')}}"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel items -->

                </div>
            </div>
        </div>
    </div>
</section>


<section id="Users">


    <!------ Include the above in your HEAD tag ---------->
    <style >

        img{max-width:100%;}
        *{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
        .my-list {
            width: 100%;
            padding: 10px;
            border: 1px solid #f5efef;
            float: left;
            margin: 15px 0;
            border-radius: 5px;
            box-shadow: 2px 3px 0px #e4d8d8;
            position:relative;
            overflow:hidden;
        }
        .my-list h3{
            text-align: left;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            margin: 0px;
            padding: 0px;
            border-bottom: 1px solid #ccc4c4;
            margin-bottom: 5px;
            padding-bottom: 5px;
        }
        .my-list span{float:left;font-weight: bold;}
        .my-list span:last-child{float:right;}
        .my-list .offer{
            width: 100%;
            float: left;
            margin: 5px 0;
            border-top: 1px solid #ccc4c4;
            margin-top: 5px;
            padding-top: 5px;
            color: #afadad;
        }
        .detail {
            position: absolute;
            top: -100%;
            left: 0;
            text-align: center;
            background: #fff;height: 100%;width:100%;

        }

        .my-list:hover .detail{top:0;}
    </style>

    <div class="container">
        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="parttime">Part Time </button>
            <button class="btn btn-default filter-button" data-filter="contractjobs">Contract Jobs</button>
            <button class="btn btn-default filter-button" data-filter="affiliatejobs">Affiliate Jobs </button>
            <button class="btn btn-default filter-button" data-filter="noncorejobs">Non-Core Jobs</button>
        </div>
        <script >

            $(document).ready(function(){

                $(".filter-button").click(function(){
                    var value = $(this).attr('data-filter');

                    if(value == "all")
                    {
                        //$('.filter').removeClass('hidden');
                        $('.filter').show('1000');
                    }
                    else
                    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                        $(".filter").not('.'+value).hide('3000');
                        $('.filter').filter('.'+value).show('3000');

                    }
                });

                if ($(".filter-button").removeClass("active")) {
                    $(this).removeClass("active");
                }
                $(this).addClass("active");

            });

        </script>

        <div class="row-fluid">

            <div class="span4 filter parttime">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: green">&nbsp;Part-Time</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter parttime">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: green">&nbsp;Part-Time</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter parttime">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: green">&nbsp;Part-Time</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

        </div>



        <div class="row-fluid">

            <div class="span4 filter affiliatejobs">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: Cyan">&nbsp;Affiliate</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter affiliatejobs">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: green">&nbsp;Part-Time</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter affiliatejobs">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: Cyan">&nbsp;Affiliate</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

        </div>


        <div class="row-fluid">

            <div class="span4 filter contractjobs">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: blue">&nbsp;Contract Jobs</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter contractjobs">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: Cyan">&nbsp;Affiliate</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

            <div class="span4 filter contractjobs">

                <div class="my-list">
                    <div class="span2">
                        <img src="{{URL::to('web/images/Untitled.png')}}" alt="dsadas" />
                    </div>
                    <div class="span10">
                        <h3 style=" font-size:  20px">&nbsp;Full Stack Designer - Mumbai  </h3>
                        <h3>Wizrich (Internship) -<b style="color: blue">&nbsp;Contract Jobs</b> </h3>
                        <h3>Experience <i style="text-align: right"> 0-3 yrs</i>&nbsp; &nbsp;&nbsp;&nbsp;  <b >? :</b> 4,00,000 - 9,00,000 P.A. </h3>
                    </div>

                    <span class="pull-right">Skills: Closer, Time Management, Inbound, Follow Ups, Outbound Calling, US Process, Go Getter, Business Development</span>
                    <div class="offer">Posted By Rishabh Thakur </div>
                    <div class="detail"><br>
                        <p>Full Stack Designer</p>
                        <!-- <img src="http://hpservicecenterschennai.in/images/hp_laptop_service_centers_in_guindy.png" alt="dsadas" /> -->
                        <p style="font-size: 16px">Wizrich Pvt Ltd &nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>
                        <p style="font-size: 16px">HR:  Rishabh Thakur&nbsp;&nbsp;<a href="#" class="btn btn-info">Connect</a></p><br>

                        <a href="#" class="btn btn-info">View Job Deatil</a>&nbsp;<a href="#" class="btn btn-info">Share</a>
                    </div>
                </div>
            </div>

        </div>



    </div>

</section>
<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Address:</strong> Raw House 18 Green Village<br>NY 11793
                        Miraroad</li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> info@cephzone.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> www.cephzone.com
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Toll Free:</strong> 6303765411
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>OUR COMPANY</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                <h4>ARCHIVES</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">Reach Us</a></li>
                        <li><a href="#">Complaint Box</a></li>
                        <li><a href="#">Suggestion</a></li>
                        <li><a href="#">Channel Partner</a></li>
                        <li><a href="#">Indivisual Contributor</a></li>
                        <li><a href="#">Careere</a></li>

                    </ul>
                </div>
            </div>
            <!--End Archives-->

            <div class="span3">
                <h4>FLICKR GALLERY</h4>
                <div class="row-fluid first">
                    <ul class="thumbnails">
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                        </li>
                    </ul>
                </div>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
@include('web.include.footer')
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<!--  Signup form -->
<div class="modal hide fade in" id="RegisForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Sign Up Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Name">
            <input type="text" class="input-small" placeholder="Email">
            <input type="text" class="input-small" placeholder="Mobile No.">
            <input type="password" class="input-small" placeholder="Password">
            <select id="cars" class="input-small">
                <option value="volvo">Type</option>
                <option value="volvo">Job Seeker</option>
                <option value="saab">Recruiter</option>
                <option value="mercedes">Freelancer</option>

            </select>
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Signup form -->

@include('web.layouts.footer')
</body>
</html>