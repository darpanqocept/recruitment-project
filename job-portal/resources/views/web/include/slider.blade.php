<section id="slide-show">
    <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container"><br /><br /><br />
                        <img class="pull-right" src="{{URL::to('web/images/sample/slider/img1.png')}}" alt="" />
                        <h2>Job Portal</h2>
                        <h3 class="gap">A portal for job seekers, freelancers, employer.</h3>
                        <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container"><br /><br /><br />
                        <img class="pull-right" src="{{URL::to('web/images/sample/slider/img2.png')}}" alt=""  style="width: 600px" />
                        <h2>CRM</h2>
                        <h3 class="gap">Centrelized Resource Management for Company</h3>
                        <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="container"><br />
                        <img class="pull-right" src="{{URL::to('web/images/sample/slider/img3.png')}}"  style="width:500px" alt="" /><br /><br /><br />
                        <h2>HRMS</h2>
                        <h3 class="gap">Human Resources Management System</h3>
                        <a class="btn btn-large btn-transparent" href="#">Learn More</a><br /><br />
                    </div>
                </div>
            </div>
            <!--Slider Item4-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="container"><br /><br /><br />
                        <img class="pull-right" src="{{URL::to('web/images/sample/slider/img5.jpg')}}" alt="" style="width:600px" /><br />
                        <h2>Freelance</h2>
                        <h3 class="gap">IT Solutions, Non-core Activities</h3>
                        <a class="btn btn-large btn-transparent" href="#">Learn More</a><br /><br />
                    </div>
                </div>
            </div>
            <!--Slider Item4-->

            <!--Slider Item5-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="container"><br />
                        <img class="pull-right" src="{{URL::to('web/images/sample/slider/img5.png')}}" style="width: 645px " alt="" /><br />
                        <h2>CRMS</h2>
                        <h3 class="gap">Client Relationship Management System</h3>
                        <a class="btn btn-large btn-transparent" href="#">Learn More</a><br /><br />
                    </div>
                </div>
            </div>
            <!--Slider Item5  -->

        </div>
        <!--/Slider Items-->

        <!--Slider Next Prev button-->
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
            <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
        </nav>
        <!--/Slider Next Prev button-->

    </div>
    <!-- /slider-wrapper -->
</section>

<script type="text/javascript">
    $(function() {
        var Page = (function() {

            var $navArrows = $( '#nav-arrows' ),
                    slitslider = $( '#slider' ).slitslider( {
                        autoplay : true
                    } ),

                    init = function() {
                        initEvents();
                    },
                    initEvents = function() {
                        $navArrows.children( ':last' ).on( 'click', function() {
                            slitslider.next();
                            return false;
                        });

                        $navArrows.children( ':first' ).on( 'click', function() {
                            slitslider.previous();
                            return false;
                        });
                    };

            return { init : init };

        })();

        Page.init();
    });
</script>