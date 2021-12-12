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
<html lang="id">


<head>
  <meta charSet="utf-8" />
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="language" content="id" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
  <meta name="theme-color" content="#70CBCF" />
 
  <title>Nge Gym | Tanya Trainner dan Tips Hidup Sehat</title>

  <link rel="icon" type="image/png" sizes="32x32" href="landing/images/new/logo2.png" />

  <link rel="preload" as="font" href="https://static.sehatq.com/web/assets/fonts/opensans/OpenSans-Regular-v17.woff2?v=6" type="font/woff2" crossorigin="anonymous" />
  <link rel="preload" as="font" href="https://static.sehatq.com/web/assets/fonts/opensans/OpenSans-SemiBold-v17.woff2?v=6" type="font/woff2" crossorigin="anonymous" />
  <link rel="preload" as="font" href="https://static.sehatq.com/web/assets/fonts/opensans/OpenSans-Bold-v17.woff2?v=6" type="font/woff2" crossorigin="anonymous" />
  <link rel="preload" as="font" href="https://static.sehatq.com/web/assets/fonts/poppins/Poppins-Regular-v9.woff2?v=6" type="font/woff2" crossorigin="anonymous" />
  <link rel="preload" as="font" href="https://static.sehatq.com/web/assets/fonts/poppins/Poppins-SemiBold-v9.woff2?v=6" type="font/woff2" crossorigin="anonymous" />
  <link rel="preload" as="font" href="https://static.sehatq.com/web/assets/fonts/sehatq/font-sehatq.woff2?v=6" type="font/woff2" crossorigin="anonymous" />


  <link rel="stylesheet" href="{!! asset('homee/style.css') !!}">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .mySlides {
      display: none;
    }
  </style>


</head>

<body>
  <div id="__next">
    <header class="sc-htpNat sc-dxgOiQ ggdsbI">
      <div class="sc-chPdSV ckEKKQ">

        <div class="sc-htpNat iZWQZt"></div>
        <div></div>
      </div>
    </header>

    <div class="sc-htpNat eyTAQK">
      <div class="sc-htpNat iZWQZt">
        <div class="sc-htpNat kxVdDs">
          <div class="sc-htpNat gMTZTI">
            <div class="slick-slider sc-kTUwUJ guxhfg home-banner-slider home-banner-main slick-initialized" dir="ltr">
              <div class="w3-content w3-section" style="max-width:400px max-height:400px">
                <img class="mySlides" src="landing2/revolution/assets/slider-gym/72d91-01.jpg" style="width:100% ;">
                <img class="mySlides" src="landing2/revolution/assets/slider-gym/ee606-02.jpg" style="width:100%">
                <img class="mySlides" src="landing2/revolution/assets/slider-gym/72d91-01.jpg" style="width:100%">

              </div>
            </div>
          </div>
        </div>
      </div>
  </div><br><br><br><br>
</div><br><br><br><br><hr>


  
      <div class="sc-chPdSV ckEKKQ">
        <div class="sc-htpNat ctiRpM">
          <nav class="sc-ckVGcZ gbheBT">
            <ul class="sc-jKJlTe kOFaVA">
              <!--
              <li class="sc-hMqMXs LyYQD">
                <a href="{{url('shop.index/')}}" class="sc-gZMcBi sc-kAzzGY EXJwv sc-eNQAEJ gHFNcT">
                  <div class="sc-htpNat cagtoI"><img src="https://cms.sehatq.com/cdn-cgi/image/f=auto,width=54,height=54,fit=pad,quality=100/public/img/revamp_icon/feature_icon_toko_active.png?v=6" alt="Toko" height="54" class="sc-jzJRlG jJeLuK" />
                  </div>Toko Suplement
                </a>
              </li>
              -->

              <li class="sc-hMqMXs LyYQD">
                <a href="{{url('indexx/')}}" class="sc-gZMcBi sc-kAzzGY EXJwv sc-eNQAEJ gHFNcT">
                  <div class="sc-htpNat cagtoI"><img src="https://cms.sehatq.com/cdn-cgi/image/f=auto,width=54,height=54,fit=pad,quality=100/public/img/revamp_icon/feature_icon_article_active.png?v=6" alt="Artikel" height="54" class="sc-jzJRlG jJeLuK" /></div>
                  Nutrisi & Tips
                </a>
              </li>

              <li class="sc-hMqMXs LyYQD">
                <a href="{{url('konsultasi.index/')}}" class="sc-gZMcBi sc-kAzzGY EXJwv sc-eNQAEJ gHFNcT">
                  <div class="sc-htpNat cagtoI">
                    <img src="https://cms.sehatq.com/cdn-cgi/image/f=auto,width=54,height=54,fit=pad,quality=100/public/img/revamp_icon/feature_icon_hcp_active.png?v=6" alt="Dokter" height="54" class="sc-jzJRlG jJeLuK" />
                  </div> Konsultasi Trainer
                </a>
              </li>
              <li class="sc-hMqMXs LyYQD">
                <a href="{{url('GymTerdekat.index/')}}" class="sc-gZMcBi sc-kAzzGY EXJwv sc-eNQAEJ gHFNcT">
                  <div class="sc-htpNat cagtoI">
                    <img src="https://cms.sehatq.com/cdn-cgi/image/f=auto,width=54,height=54,fit=pad,quality=100/public/img/revamp_icon/feature_icon_hcf_active.png?v=6" alt="Rumah Sakit" height="54" class="sc-jzJRlG jJeLuK" />
                  </div>Gym Terdekat
                </a></li>

              <!--
              <li class="sc-hMqMXs LyYQD"><a href="{{url('cekkal.index/')}}" class="sc-gZMcBi sc-kAzzGY EXJwv sc-eNQAEJ gHFNcT">
                  <div class="sc-htpNat cagtoI">
                    <img src="landing/images/new/food.png" alt="Promo" height="54" class="sc-jzJRlG jJeLuK" />
                  </div>Cek Kalori & Olahraga Ideal
                </a></li>

              <li class="sc-hMqMXs LyYQD">
                <a href="{{url('vidtutor.index/')}}" class="sc-gZMcBi sc-kAzzGY EXJwv sc-eNQAEJ gHFNcT">
                  <div class="sc-htpNat cagtoI">
                    <img src="https://cms.sehatq.com/cdn-cgi/image/f=auto,width=54,height=54,fit=pad,quality=100/public/img/revamp_icon/feature_icon_procedure_active.png?v=6" alt="Promo" height="54" class="sc-jzJRlG jJeLuK" />
                  </div>Gym Tips & Teknik
                </a>
              </li>
              -->

          </nav>
        </div>
      </div>




    </div>

    <footer class="sc-htpNat cnzSqm">
      <div class="sc-chPdSV ckEKKQ">
        <div class="sc-htpNat hZywIq">
          <div class="sc-htpNat bGGnxF">
            <img alt="SehatQ" src="landing/images/new/logo2.png" width="150" height="150" class="sc-jzJRlG jJeLuK" />
          </div>
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
  </div>
  </div>
  </div>

  </footer>
  <script>
    //Carousel
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 5000); // Change image every 2 seconds
    }
  </script>

</body>

</html>
          
@endsection
