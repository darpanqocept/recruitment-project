<?php
include_once('header.php');
?>    <!-- Middle Content Start -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.js"></script>
<div class="vd_content-wrapper">
  <div class="vd_container">
    <div class="vd_content clearfix">
      <div class="vd_head-section clearfix">
        <div class="vd_panel-header">
          <ul class="breadcrumb">
            <li><a href="index-2.html">Home</a> </li>

            <li class="active">Resume</li>
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
          <h1>Manage Resume</h1>
          <small class="subtitle"></small> </div>
        </div>
        <div class="vd_content-section clearfix">
          <ul id="filters" class="nav nav-pills">
            <li class="active"><a  href="#photos-1" data-filter="*">All</a></li>
            <li><a  href="#photos-2" data-filter=".filter-1">Sales</a></li>
            <li><a  href="#photos-3" data-filter=".filter-2">IT / Development</a></li>
            <li><a  href="#photos-4" data-filter=".filter-3">Management</a></li>
          </ul>
          <br/>
          <div class="isotope js-isotope vd_gallery" style="height: auto;" >
            <div class="gallery-item vd_content filter-1  " style="height: auto;" > <a href="download/Capture1.png" data-rel="prettyPhoto[2]"> 
              <img alt="example image" src="download/Capture1.png" style="height: auto; " >
              <div class="bg-cover"></div>
            </a>
            <div class="vd_info">
              <h3 class="mgbt-xs-15"><span class="font-semibold">Technical</span>Resume</h3>
              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="download/Capture1.png"  data-rel="prettyPhoto[1]"><i class="fa fa-search"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a> </div>
            </div>


             <div class="gallery-item vd_content filter-2" style="height: auto;" > <a href="download/Capture1.png" data-rel="prettyPhoto[2]"> 
              <img alt="example image" src="download/Capture1.png"  >
              <div class="bg-cover"></div>
            </a>
            <div class="vd_info">
              <h3 class="mgbt-xs-15"><span class="font-semibold">Technical</span>Resume</h3>
              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="download/Capture1.png"  data-rel="prettyPhoto[1]"><i class="fa fa-search"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a> </div>
            </div>


             <div class="gallery-item  filter-2" style="height: auto;" > <a href="download/Capture2.png" data-rel="prettyPhoto[2]"> 
              <img alt="example image" src="download/Capture2.png"  >
              <div class="bg-cover"></div>
            </a>
            <div class="vd_info">
              <h3 class="mgbt-xs-15"><span class="font-semibold">Sales</span>Resume</h3>
              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="download/Capture2.png"  data-rel="prettyPhoto[1]"><i class="fa fa-search"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a> </div>
            </div>


             <div class="gallery-item  filter-3" style="height: auto;" > <a href="download/Capture3.png" data-rel="prettyPhoto[2]"> 
              <img alt="example image" src="download/Capture3.png"  >
              <div class="bg-cover"></div>
            </a>
            <div class="vd_info">
              <h3 class="mgbt-xs-15"><span class="font-semibold">Management</span>Resume</h3>
              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="download/Capture3.png"  data-rel="prettyPhoto[1]"><i class="fa fa-search"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a> </div>
            </div>


             <div class="gallery-item  filter-1" style="height: auto;" > <a href="download/Capture4.png" data-rel="prettyPhoto[2]"> 
              <img alt="example image" src="download/Capture4.png"  >
              <div class="bg-cover"></div>
            </a>
            <div class="vd_info">
              <h3 class="mgbt-xs-15"><span class="font-semibold">Technical Sales</span>Resume</h3>
              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="download/Capture4.png"  data-rel="prettyPhoto[1]"><i class="fa fa-search"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a> </div>
            </div>


             <div class="gallery-item  filter-2" style="height: auto;" > <a href="download/Capture4.png" data-rel="prettyPhoto[2]"> 
              <img alt="example image" src="download/Capture4.png"  >
              <div class="bg-cover"></div>
            </a>
            <div class="vd_info">
              <h3 class="mgbt-xs-15"><span class="font-semibold">Support Team </span>Resume</h3>
              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="download/Capture5.png"  data-rel="prettyPhoto[1]"><i class="fa fa-search"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a> </div>
            </div>


            




          
           
          </div>
          <div class="clearfix"></div>
          <br/>
          <br/>
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