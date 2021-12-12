@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app1')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>G Article</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../css.css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="artikel/A.fonts,,_icomoon,,_style.css css,,_bootstrap.min.css css,,_jquery-ui.css css,,_owl.carousel.min.css css,,_owl.theme.default.min.css css,,_owl.theme.default.min.css css,,_jquery.fancybox.min.css css,,_bootstra.css">
    <link href="artikel/css/A.jquery.mb.YTPlayer.min.css.pagespeed.cf.N2G3N4O1x5.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="artikel/css/A.style.css.pagespeed.cf.2yPk2cBvMB.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('homee/style.css') !!}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 d-flex">
                        <a href="index.html" class="site-logo">
                            Today Hits
                        </a>
                        <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                    </div>
                    <div class="col-12 col-lg-6 ml-auto d-flex">
                        <div class="ml-md-auto top-social d-none d-lg-inline-block">
                            <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                        </div>
                        <form action="#" class="search-form d-inline-block">
                            <div class="d-flex">
                                <input type="email" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-6 d-block d-lg-none text-right">
                    </div>
                </div>
            </div>
            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    <li class="active">
                                        <a href="index.html" class="nav-link text-left">Home</a>
                                    </li>
                                    <li>
                                        <a href="categories.html" class="nav-link text-left">Categories</a>
                                    </li>
                                    <li>
                                        <a href="categories.html" class="nav-link text-left">Politics</a>
                                    </li>
                                    <li>
                                        <a href="categories.html" class="nav-link text-left">Business</a>
                                    </li>
                                    <li>
                                        <a href="categories.html" class="nav-link text-left">Health</a>
                                    </li>
                                    <li><a href="categories.html" class="nav-link text-left">Design</a></li>
                                    <li>
                                        <a href="categories.html" class="nav-link text-left">Sport</a>
                                    </li>
                                    <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section py-0">
            <div class="owl-carousel hero-slide owl-style">
                <div class="site-section">
                    <div class="container">
                        <div class="half-post-entry d-block d-lg-flex bg-light">
                            <div class="img-bg" style="background-image:url(artikel/images/xbig_img_1.jpg.pagespeed.ic.UKA_TdMRvl.jpg)"></div>
                            <div class="contents">
                                <span class="caption">Editor's Pick</span>
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-section">
                    <div class="container">
                        <div class="half-post-entry d-block d-lg-flex bg-light">
                            <div class="img-bg" style="background-image:url(artikel/images/xbig_img_1.jpg.pagespeed.ic.UKA_TdMRvl.jpg)"></div>
                            <div class="contents">
                                <span class="caption">Editor's Pick</span>
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2>Editor's Pick</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="post-entry-1">
                                    <a href="post-single.html"><img src="images/ximg_h_1.jpg.pagespeed.ic.B9PV9Wpp-6.jpg" alt="Image" class="img-fluid"></a>
                                    <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                    <div class="post-meta">
                                        <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                        <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-entry-2 d-flex bg-light">
                                    <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_1.jpg.pagespeed.ic.3I1idqfnsc.jpg)"></div>
                                    <div class="contents">
                                        <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                        <div class="post-meta">
                                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-entry-2 d-flex">
                                    <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_2.jpg.pagespeed.ic.InLUnLj133.jpg)"></div>
                                    <div class="contents">
                                        <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                        <div class="post-meta">
                                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-entry-2 d-flex">
                                    <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_3.jpg.pagespeed.ic.WaENlO8gaw.jpg)"></div>
                                    <div class="contents">
                                        <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                        <div class="post-meta">
                                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section-title">
                            <h2>Trending</h2>
                        </div>
                        <div class="trend-entry d-flex">
                            <div class="number align-self-start">01</div>
                            <div class="trend-contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="trend-entry d-flex">
                            <div class="number align-self-start">02</div>
                            <div class="trend-contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="trend-entry d-flex">
                            <div class="number align-self-start">03</div>
                            <div class="trend-contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="trend-entry d-flex">
                            <div class="number align-self-start">04</div>
                            <div class="trend-contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <p>
                            <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-0">
            <div class="container">
                <div class="half-post-entry d-block d-lg-flex bg-light">
                    <div class="img-bg" style="background-image:url(artikel/images/xbig_img_1.jpg.pagespeed.ic.UKA_TdMRvl.jpg)"></div>
                    <div class="contents">
                        <span class="caption">Editor's Pick</span>
                        <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                        <div class="post-meta">
                            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
                            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>Politics</h2>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_1.jpg.pagespeed.ic.3I1idqfnsc.jpg)"></div>
                            <div class="contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_2.jpg.pagespeed.ic.InLUnLj133.jpg)"></div>
                            <div class="contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_3.jpg.pagespeed.ic.WaENlO8gaw.jpg)"></div>
                            <div class="contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>Business</h2>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_1.jpg.pagespeed.ic.3I1idqfnsc.jpg)"></div>
                            <div class="contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_2.jpg.pagespeed.ic.InLUnLj133.jpg)"></div>
                            <div class="contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail" style="background-image:url(artikel/images/ximg_v_3.jpg.pagespeed.ic.WaENlO8gaw.jpg)"></div>
                            <div class="contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="section-title">
                            <h2>Recent News</h2>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail order-md-2" style="background-image:url(artikel/images/ximg_h_4.jpg.pagespeed.ic.QPUtNJLYvL.jpg)"></div>
                            <div class="contents order-md-1 pl-0">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail order-md-2" style="background-image:url(artikel/images/ximg_h_3.jpg.pagespeed.ic.kAgsEPQowC.jpg)"></div>
                            <div class="contents order-md-1 pl-0">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="post-entry-2 d-flex">
                            <div class="thumbnail order-md-2" style="background-image:url(artikel/images/ximg_h_3.jpg.pagespeed.ic.kAgsEPQowC.jpg)"></div>
                            <div class="contents order-md-1 pl-0">
                                <span class="caption mb-4 d-block">Editor's Pick</span>
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="section-title">
                            <h2>Popular Posts</h2>
                        </div>
                        <div class="trend-entry d-flex">
                            <div class="number align-self-start">01</div>
                            <div class="trend-contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="trend-entry d-flex">
                            <div class="number align-self-start">02</div>
                            <div class="trend-contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="trend-entry d-flex">
                            <div class="number align-self-start">03</div>
                            <div class="trend-contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="trend-entry d-flex pl-0">
                            <div class="number align-self-start">04</div>
                            <div class="trend-contents">
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <p>
                            <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="custom-pagination list-unstyled">
                            <li><a href="#">1</a></li>
                            <li class="active">2</li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer class="sc-htpNat cnzSqm">
            <div class="sc-chPdSV ckEKKQ">
                <div class="sc-htpNat hZywIq">
                    <div class="sc-htpNat bGGnxF"><img alt="SehatQ" src="landing/images/new/logo2.png" width="150" height="150" class="sc-jzJRlG jJeLuK" /></div>
                    <div class="sc-kGXeez iygvnT">
                        <div class="sc-kpOJdX gxxeLD">
                            <div class="sc-htpNat bSPBUS">
                                <h4 class="sc-gZMcBi cCJIfu poppins">Langganan Newsletter</h4>
                                <div class="sc-htpNat iZWQZt">
                                    <p class="sc-gZMcBi LMvqO">Jadi orang yang pertama tahu info &amp; promosi kesehatan terbaru
                                        dari
                                        SehatQ. Gratis.</p>
                                    <div class="sc-kGXeez kJqNCf">
                                        <div class="sc-kpOJdX cxogSu"><label class="sc-jbKcbu hJrbEv"><input type="radio" name="news_gender" class="sc-jqCOkK iXJHQM" /><span class="sc-dNLxif gzOlIM"><i></i>Perempuan</span></label>
                                        </div>
                                        <div class="sc-kpOJdX kHHyUN"><label class="sc-jbKcbu hJrbEv"><input type="radio" name="news_gender" class="sc-jqCOkK iXJHQM" /><span class="sc-dNLxif gzOlIM"><i></i>Laki-laki</span></label>
                                        </div>
                                    </div>
                                    <div class="sc-hqyNC lgqMMo">
                                        <div class="sc-kGXeez jXfIFk">
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-iAyFgw PPzwV">
                                                    <div class="sc-hSdWYo lpuOSs">
                                                        <div class="sc-jlyJG jpaAuv">
                                                            <input type="email" maxLength="150" placeholder="Email" value="" class="sc-jAaTju bXLluq" />
                                                        </div>
                                                        <div class="sc-jWBwVP eWjpev">
                                                            <button type="button" class="sc-bxivhb fUcnfF sc-ifAKCX ebnevm"><i class="sc-EHOje hNxZub"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-htpNat iZWQZt">
                                <h4 class="sc-gZMcBi cCJIfu poppins">Metode Pembayaran</h4>
                                <div class="sc-kGXeez fvSaIv">
                                    <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/payment/bca.png?v=6" alt="Metode pembayaran BCA" width="60" height="20" class="sc-jzJRlG jJeLuK" /></div>
                                    <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/payment/mandiri.png?v=6" alt="Metode pembayaran Mandiri" width="65" height="18" class="sc-jzJRlG jJeLuK" /></div>
                                    <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/payment/bni.png?v=6" alt="Metode pembayaran BNI" width="58" height="17" class="sc-jzJRlG jJeLuK" /></div>
                                    <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/payment/permata.png?v=6" alt="Metode pembayaran Permata" width="84" height="20" class="sc-jzJRlG jJeLuK" /></div>
                                    <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/cc.png?v=6" alt="Metode pembayaran Kartu Kredit" width="180.36" height="29" class="sc-jzJRlG jJeLuK" />
                                    </div>
                                    <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/gopay.png?v=6" alt="Metode pembayaran Gopay" width="73.84" height="16" class="sc-jzJRlG jJeLuK" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-kpOJdX bonvib">
                            <div class="sc-htpNat iZWQZt">
                                <h4 class="sc-gZMcBi cCJIfu poppins">Fitur</h4>
                                <div class="sc-htpNat iZWQZt">
                                    <ul class="sc-gipzik kRcWov">

                                        <li class="sc-csuQGl clWQaq"><a href="/promo" class="sc-gZMcBi sc-kAzzGY wYtXl">Promo</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="/artikel" class="sc-gZMcBi sc-kAzzGY wYtXl">Artikel</a>
                                        </li>
                                        <li class="sc-csuQGl clWQaq"><a href="/telemed" class="sc-gZMcBi sc-kAzzGY wYtXl">Chat
                                                Dokter</a>
                                        </li>
                                        <li class="sc-csuQGl clWQaq"><a href="/penyakit" class="sc-gZMcBi sc-kAzzGY wYtXl">Penyakit</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="/forum" class="sc-gZMcBi sc-kAzzGY wYtXl">Forum</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="/review" class="sc-gZMcBi sc-kAzzGY wYtXl">Review</a>
                                        </li>
                                        <li class="sc-csuQGl clWQaq"><a href="/tes-kesehatan" class="sc-gZMcBi sc-kAzzGY wYtXl">Tes
                                                Kesehatan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sc-kpOJdX bonvib">
                            <div class="sc-htpNat bGGnxF">
                                <h4 class="sc-gZMcBi cCJIfu poppins">Perusahaan</h4>
                                <div class="sc-htpNat iZWQZt">
                                    <ul class="sc-gipzik kRcWov">
                                        <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Tentang Kami</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="/karir" class="sc-gZMcBi sc-kAzzGY wYtXl">Karir</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="/kontak" class="sc-gZMcBi sc-kAzzGY wYtXl">Kontak
                                                Kami</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sc-htpNat iZWQZt">
                                <h4 class="sc-gZMcBi cCJIfu poppins">Follow us on</h4>
                                <div class="sc-htpNat iZWQZt">
                                    <ul class="sc-gipzik kRcWov">
                                        <li class="sc-csuQGl clWQaq"><a href="#" target="_blank" rel="noopener noreferrer" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">
                                                <div class="sc-bdVaJa iwhGZe"><img src="https://static.sehatq.com/web/assets/img/socials/social_fb_grey.svg?v=6" alt="Facebook" height="14" width="14" class="sc-jzJRlG jJeLuK" /><span class="sc-gZMcBi hrxLF">Facebook</span></div>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="sc-kpOJdX cBXViV">
                            <div class="sc-htpNat bGGnxF">
                                <h4 class="sc-gZMcBi cCJIfu poppins">Dukungan</h4>
                                <div class="sc-htpNat iZWQZt">
                                    <ul class="sc-gipzik kRcWov">
                                        <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Syarat
                                                dan Ketentuan</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Privacy
                                                Policy</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Kebijakan
                                                Editorial</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl">Direktori
                                                Tag</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Pusat
                                                Bantuan</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sc-htpNat iZWQZt">
                                <h4 class="sc-gZMcBi cCJIfu poppins">Daftar Menjadi Mitra</h4>
                                <div class="sc-htpNat iZWQZt">
                                    <ul class="sc-gipzik kRcWov">
                                        <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Merchant</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="/mitra-faskes" class="sc-gZMcBi sc-kAzzGY wYtXl">Mitra
                                                Faskes</a></li>
                                        <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl">Mitra
                                                Perusahaan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sc-kpOJdX cBXViV">
                            <div class="sc-htpNat iZWQZt">
                                <h4 class="sc-gZMcBi cCJIfu poppins">Available On</h4>
                                <div class="sc-htpNat iZWQZt"><a href="#" target="_blank" rel="noopener noreferrer" class="sc-gZMcBi sc-kAzzGY EXJwv"><img src="https://static.sehatq.com/web/assets/img/appstore.png?v=6" alt="App Store" width="150" height="50" class="sc-jzJRlG jJeLuK" /></a></div>
                                <div class="sc-htpNat cwbsJi"><a href="#" target="_blank" rel="noopener noreferrer" class="sc-gZMcBi sc-kAzzGY EXJwv"><img src="https://static.sehatq.com/web/assets/img/playstore.png?v=6" alt="Play Store" width="150" height="44.67" class="sc-jzJRlG jJeLuK" /></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    </footer>


    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"></circle>
        </svg></div>
    <script src="artikel/js/jquery-3.3.1.min.js"></script>
    <script src="artikel/js/jquery-migrate-3.0.1.min.js jquery-ui.js popper.min.js.pagespeed.jc.g3D2aJuc8_.js"></script>
    <script>
        eval(mod_pagespeed_Hsg70AQ3Jq);
    </script>
    <script>
        eval(mod_pagespeed_zWQ4UTwo1d);
    </script>
    <script>
        eval(mod_pagespeed_EEF0rDXZX$);
    </script>
    <script src="artikel/js/bootstrap.min.js"></script>
    <script src="artikel/js/owl.carousel.min.js jquery.stellar.min.js jquery.countdown.min.js.pagespeed.jc.ZWnZYRwxEp.js"></script>
    <script>
        eval(mod_pagespeed_SVFd1d_DJi);
    </script>
    <script>
        eval(mod_pagespeed_EFJUD9kbFL);
    </script>
    <script>
        eval(mod_pagespeed_NtWsKPNSnZ);
    </script>
    <script src="artikel/js/bootstrap-datepicker.min.js jquery.easing.1.3.js aos.js.pagespeed.jc.N-zqvBnqxg.js"></script>
    <script>
        eval(mod_pagespeed_mNWvLuNBZJ);
    </script>
    <script>
        eval(mod_pagespeed_o3B38oCEk_);
    </script>
    <script>
        eval(mod_pagespeed_MuIxKGdxP7);
    </script>
    <script src="artikel/js/jquery.fancybox.min.js jquery.sticky.js.pagespeed.jc.opxTMbg1Qa.js"></script>
    <script>
        eval(mod_pagespeed_wxcTEcDtyL);
    </script>
    <script>
        eval(mod_pagespeed_5uEZ5mKeBm);
    </script>
    <script src="artikel/js/jquery.mb.YTPlayer.min.js main.js.pagespeed.jc.EVWM4_VEPC.js"></script>
    <script>
        eval(mod_pagespeed_Uzr_TEWEY4);
    </script>
    <script>
        eval(mod_pagespeed_gbSFcv3hRK);
    </script>

    <script async="" src="../../gtag/js.js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>
@endsection