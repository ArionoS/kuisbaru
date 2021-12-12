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

 <!-- end of container -->

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
                                    <img class="img-responsive" src="a/images/otot.jpg"
                                        alt="#" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="right-buyer">
                                    <h4>Nge-Gym</h4>
                                    <h2>Olahraga Untuk Menambah Massa Otot<br>
                                    </h2>
                                    <p>Calisthenics is a motor movement or sport that uses body weight to build body
                                        muscles. The movement of this sport is fairly simple.
                                    </p>
                                    <a href="{{url('materi.index/')}}">Get It</a>
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
                                                    <h2>Olahraga untuk mengurangi berat badan <br></h2>
                                                    <p>Never worry about fail with Nge-Gym App your body is directly
                                                        perfect
                                                    </p>
                                                    .
                                                    <a href="{{url('fatloss.index/')}}">Get It</a>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-6">
                                                <div class="right-supplier">
                                                    <img class="img-responsive" src="a/images/gendut.jpg" alt="#" />
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