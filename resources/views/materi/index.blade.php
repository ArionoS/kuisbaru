@section('js')
<script type="text/javascript">
   $(document).ready(function() {
      $('#table').DataTable({
         "iDisplayLength": 50
      });

   });
</script>
@stop
@extends('layouts.app1')

@section('content')

<head>
   <meta charset="UTF-8">
   <title> </title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="a/css/font-awesome.min.css">
   <link rel="stylesheet" href="a/css/bootstrap.min.css">

   <link rel="stylesheet" href="a/css/animate-wow.css">
   <link rel="stylesheet" href="a/css/style.css">
   <link rel="stylesheet" href="a/css/bootstrap-select.min.css">
   <link rel="stylesheet" href="a/css/slick.min.css">
   <link rel="stylesheet" href="a/css/responsive.css">
</head>

<body>
   <header id="header" class="top-head">

   </header>
   <div class="modal fade lug" id="myModal" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Change</h4>
            </div>
            <div class="modal-body">
               <ul>
                  <li><a href="about-us.html"><img src="a/images/help-icon.png" alt="" /> About US</a></li>
                  <li><a href="category.html"><img src="a/images/help-icon.png" alt="" /> Category </a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div id="sidebar" class="top-nav">
      <ul id="sidebar-nav" class="sidebar-nav">
         <li><a href="profile.html">Profile</a></li>
         <li><a href="howitworks.html">Product works</a></li>
         <li><a href="productpage.html">Product for Business</a></li>
      </ul>
   </div>
   <div class="page-content-product">
      <div class="main-product">
         <div class="container">
            <div class="row clearfix">
               <div class="find-box">

                  <div class="row clearfix">
                     <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="{{url('materi.pushup/')}}">
                           <div class="box-img">
                              <h4>Push Up</h4>
                              <img src="https://static.vecteezy.com/system/resources/thumbnails/000/162/135/small/Free_Push_Up_Vector-01.jpg" alt="" />
                           </div>
                        </a>
                     </div>
                     <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="{{url('materi.pullup/')}}">
                           <div class="box-img">
                              <h4>Pull Up</h4>
                              <img src="https://www.wikihow.com/images_en/thumb/7/72/Do-Pull-Ups-Without-a-Bar-Step-2.jpg/v4-460px-Do-Pull-Ups-Without-a-Bar-Step-2.jpg.webp" alt="" />
                           </div>
                        </a>
                     </div>
                     <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="{{url('materi.situp/')}}">
                           <div class="box-img">
                              <h4>Sit Up</h4>
                              <img src="https://i2.wp.com/beritatangsel.com/wp-content/uploads/2017/02/i.jpg?fit=550%2C500&ssl=1" alt="" />
                           </div>
                        </a>
                     </div>
                     <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="{{url('materi.dipssq/')}}">
                           <div class="box-img">
                              <h4>Dips Squat</h4>
                              <img style='width:105px;' src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxeOJSdR9w6E_X-Dd2PxcvrNJRrHRPKkeVXMVMWrNVnx08zI_h_2fY8Qio2vyVkRViQas&usqp=CAU" alt="" />
                           </div>
                        </a>
                     </div>
                     <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="{{url('materi.jumpj/')}}">
                           <div class="box-img">
                              <h4>Jumping Jack</h4>
                              <img src="https://fitpass-images.s3.amazonaws.com/content_blog_inner_64A71045.png" alt="" />
                           </div>
                        </a>
                     </div>


                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="col-md-5 col-sm-6">
      <div class="left-supplier">
      </div>

      <div class="row">
         <div class="main-start-box">
            <div class="bg_img_left"><img src="a/images/bg_img1.png" alt="#" /></div>
            <div class="container">
               <div class="buyer-box clearfix">
                  <div class="row">
                     <div class="bg_img_right"><img src="a/images/bg_img1.png" alt="#" /></div>
                     <div class="main-start-box">
                        <div class="container">
                           <div class="supplier clearfix">

                              <div class="col-md-5 col-sm-6">
                                 <button class="btn btn-info"> 
                                 <a href="{{url('indexx/')}}">Back To Main</a>
                                 </button>
                                 <div class="left-supplier">

                                    <h4>Calisthenics Video Tutorial</h4>
                                    <h2>Grow your body <br><span>With a Video tutorial</span></h2>
                                    <p>Never worry about fail with Nge-Gym App your body is directly
                                       perfect
                                    </p>
                                    .
                                    <a href="{{url('vidtutor.index/')}}">Get It</a>
                                 </div>
                              </div>
                              <div class="col-md-7 col-sm-6">
                                 <div class="right-supplier">
                                    <img class="img-responsive" src="landing2/demo-categories/gym/images/01.jpg" alt="#" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endsection

      <script src="a/js/jquery-1.12.4.min.js"></script>
      <script src="a/js/bootstrap.min.js"></script>
      <script src="a/js/bootstrap-select.min.js"></script>
      <script src="a/js/slick.min.js"></script>
      <script src="a/js/wow.min.js"></script>
      <script src="a/js/custom.js"></script>

      </html>