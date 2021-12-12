<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NGE - GYM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/select2.css')}}">
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">
  @section('css')

  @show
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
  <link rel="stylesheet" href="{!! asset('homee/style.css') !!}">
  <link rel="stylesheet" href="{!! asset('konsultasi/style.css') !!}">
</head>
<body>
  <div class="sc-kpOJdX jdBprp">
    <div class="sc-htpNat iZWQZt">
      <form method="get" target="" action="#">
        <div class="sc-iAyFgw bPzenj">
          <div class="sc-hSdWYo fPDUWa">
            <div class="sc-cvbbAY cTYILf"><i class="sc-EHOje lntAKA"></i></div>
            <div class="sc-jlyJG jpaAuv"><input type="text" placeholder="Search For Info" value="" name="searchInput" autoComplete="off" class="sc-jAaTju ieDlNt" /></div>
          </div>
        </div><input type="submit" hidden="" />
      </form>
    </div>
  </div>

    <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href= "{{url('/')}}"style="color: #000000">
        NGE - GYM 
        </a>
           <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
          <i class="fa fa-align-justify" style="color: rgb(7, 7, 7);"></i>
        </button>
      </div><br>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <div class="sc-kpOJdX jdBprp">
          <div class="sc-htpNat iZWQZt">
            <form method="get" target="" action="#">
              <div class="sc-iAyFgw bPzenj">
                <div class="sc-hSdWYo fPDUWa">
                  <div class="sc-cvbbAY cTYILf"><i class="sc-EHOje lntAKA"></i></div>
                  <div class="sc-jlyJG jpaAuv"><input type="text" placeholder="Search For Info" value="" name="searchInput" autoComplete="off" class="sc-jAaTju ieDlNt" /></div>
                </div>
              </div><input type="submit" hidden="" />
            </form>
          </div>
        </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item dropdown d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{Auth::user()->name}} !</span>
                @if(Auth::user()->gambar == '')
                  <img class="img-xs rounded-circle"  src="{{asset('images/user/default.png')}}" alt="profile image">
                @else
                <img class="img-xs rounded-circle"  src="{{asset('images/user/'.Auth::user()->gambar)}}" alt="profile image">
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                 
                </div>
              </a>
              <a class="dropdown-item" style="margin-top: 20px;" href="{{route('home', Auth::user()->id)}}">
              Dashboard
               </a>
              <a class="dropdown-item" style="margin-top: 20px;" href="{{route('user.edit', Auth::user()->id)}}">
               Edit Profile
              </a>
              @if(Auth::user()->level == 'admin')
              <a class="dropdown-item"   href="{{ route('home1') }}" style="margin-top: 20px;" href="{{route('user.edit', Auth::user()->id)}}">
               Data
               </a>
               @endif
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 Sign Out

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      @section('sidebar')
          @include('layouts.sidebar',['user' => Auth::User()])
      @show
      </nav>
      <div class="main-panel">
        <div class="content-wrapper1">
          @yield('content')

        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{date('Y')}}
            <a href="Perpus Polinema" target="_blank">Ariono Dan Rajen</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('js/sweetalert2.all.js')}}"></script>
  <script src="{{asset('js/select2.min.js')}}"></script>
  @include('sweetalert::alert')
  @section('js')

  @show
</body>

</html>
                         
   