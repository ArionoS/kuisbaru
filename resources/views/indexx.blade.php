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
   <link rel="stylesheet" href="{!! asset('homee/style.css') !!}">
   <link rel="stylesheet" type="text/css" href="landing2/css/style.css">

</head>

<body>
   <header id="header" class="top-head">

   </header>

   <div class="page-content-product">
      <div class="main-product">
         <div class="container">
            <div class="row clearfix">
               <div class="find-box">
                  <h1>Find your material needed<br>Come here</h1>
                  <h4>Nge - Gym</h4>

               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="cat-main-box">
      <div class="container">
         <div class="row panel-row">
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="a/images/xpann-icon.jpg" class="icon-small" alt="">
                     <h4>Learn</h4>
                     <p>Grow easily with Nge-Gym. Create free account.
                        We help expanding your training easily.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="a/images/create-icon.jpg" class="icon-small" alt="">
                     <h4>Fail</h4>
                     <p>Grow easily with Nge-Gym. Create free account.
                        We help expanding your training easily.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="a/images/get-icon.jpg" class="icon-small" alt="">
                     <h4>Learn Again</h4>
                     <p>Grow easily with Nge-Gym. Create free account.
                        We help expanding your training easily.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div id="services" class="cards-1">
      <div class="container">
         <h2 style="color: black;text-align:center;">Cek Berat Badan Ideal Anda</h2>
         <div class="row">
            <div class="col-lg-12">
               <p class="kelamin">Apa Jenis Kelamin Anda ?</p>
               <!-- Contact Form -->
               <form>
                  <div class="grid">
                     <label class="card" style="margin-right: 16px;">
                        <input name="men" class="radio" type="radio" checked>

                        <span class="plan-details">
                           <img src="https://hellosehat.com/images/maleIcon.svg" style="height: 100px;" alt="alternative">
                           <p class="kelamin"><span class="plan-type">Men</span></p>

                        </span>
                     </label>

                     <label class="card">
                        <input name="woman" class="radio" type="radio" checked>

                        <span class="plan-details">
                           <img class="img-fluid" src="https://hellosehat.com/images/femaleIcon.svg" style="height: 100px;" alt="alternative">
                           <p class="kelamin"><span class="plan-type">Woman</span></p>

                        </span>
                     </label>

                  </div>

                  <div class="form-group">
                     <input type="text" class="form-control-input" id="usia" required>
                     <label class="label-control" for="usia">Berapa Usia Anda ? </label>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control-input" id="tinggi" required>
                     <label class="label-control" for="tinggi">Berapa Tinggi Anda ?</label>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control-input" id="berat" required>
                     <label class="label-control" for="berat">Berapa Berat Badan Anda(KG) ?</label>
                  </div>

                  <div class="form-group">
                     <button type="submit" class="form-control-submit-button">Submit</button>
                  </div>
               </form>
               <!-- end of contact form -->

            </div> <!-- end of col -->

         </div> <!-- end of col -->
      </div> <!-- end of row -->
   </div> <!-- end of container -->

   <div class="start-free-box">
      <div class="container">
         <div class="row">

         </div>
         <div class="row">
            <div class="main-start-box">
               <div class="bg_img_left"><img src="a/images/bg_img1.png" alt="#" /></div>
               <div class="container">
                  <div class="buyer-box clearfix">
                     <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="left-buyer">
                           <img class="img-responsive" src="landing2/demo-categories/gym/images/03.jpg" alt="#" />
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="right-buyer">
                           <h4>Nge-Gym</h4>
                           <h2>Workout Tutorial<br>
                              <span>many great tutorial inside here!</span>
                           </h2>
                           <p>Calisthenics is a motor movement or sport that uses body weight to build body muscles. The movement of this sport is fairly simple.
                           </p>
                           <a href="{{url('workout_category/')}}">Get It</a>
                        </div>
                     </div>


                                    <div class="row">
                                       <div class="bg_img_right"><img src="a/images/bg_img1.png" alt="#" /></div>
                                       <div class="main-start-box">
                                          <div class="container">
                                             <div class="supplier clearfix">
                                                <div class="col-md-5 col-sm-6">
                                                   <div class="left-supplier">
                                                      <h4>Nge-Gym</h4>
                                                      <h2>Nutrition Information <br><span>Information to grow your body</span></h2>
                                                      <p>Never worry about fail with Nge-Gym App your body is directly
                                                         perfect
                                                      </p>
                                                      .
                                                      <a href="{{url('nutrition_category/')}}">Get It</a>
                                                   </div>
                                                </div>
                                                <div class="col-md-7 col-sm-6">
                                                   <div class="right-supplier">
                                                      <img class="img-responsive" src="a/images/food.jpg" alt="#" />
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <script src="a/js/jquery-1.12.4.min.js"></script>
                              <script src="a/js/bootstrap.min.js"></script>
                              <script src="a/js/bootstrap-select.min.js"></script>
                              <script src="a/js/slick.min.js"></script>
                              <script src="a/js/wow.min.js"></script>
                              <script src="a/js/custom.js"></script>
</body>

</html>
@endsection