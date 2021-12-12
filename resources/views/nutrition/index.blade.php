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
                                <a href="{{url('nutrition.telur/')}}">
                                    <div class="box-img">
                                        <h4>Telur</h4>
                                        <img src="a/images/egg.jfif"
                                            alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3">
                                <a href="{{url('nutrition.dada/')}}">
                                    <div class="box-img">
                                        <h4>Dada Ayam</h4>
                                        <img src="a/images/dada.jpg"
                                            alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3">
                                <a href="{{url('nutrition.kedelai/')}}">
                                    <div class="box-img">
                                        <h4>Kedelai</h4>
                                        <img src="a/images/kedelai.jpeg"
                                            alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3">
                                <a href="{{url('nutrition.salmon/')}}">
                                    <div class="box-img">
                                        <h4>Salmon</h4>
                                        <img src="a/images/salmon.jpg"
                                            alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3">
                                <a href="{{url('nutrition.kacang/')}}">
                                    <div class="box-img">
                                        <h4>Kacang Merah</h4>
                                        <img style="width: 90%" src="a/images/kacang_merah.jpg"
                                            alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3">
                                <a href="{{url('nutrition.yogurt/')}}">
                                    <div class="box-img">
                                        <h4>Yogurt</h4>
                                        <img  src="a/images/yogurt.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3">
                                <a href="{{url('nutrition.quinoa/')}}">
                                    <div class="box-img">
                                        <h4>Quinoa</h4>
                                        <img src="a/images/quinoa.jpg" alt="" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3">
                                <a href="{{url('nutrition.bubuk/')}}">
                                    <div class="box-img">
                                        <h4>Bubuk Protein</h4>
                                        <img src="a/images/bubuk.jpg" alt="" />
                                    </div>
                                </a>
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