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
<!DOCTYPE html>
<html lang="id">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charSet="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="referrer" content="no-referrer-when-downgrade" />

    <meta name="robots" content="noindex, follow" />

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
    <link rel="stylesheet" href="{!! asset('konsultasi/style.css') !!}">
</head>

<body>
    <div class="sc-htpNat jFUHQI">
        <div class="sc-chPdSV ckEKKQ">
            <div class="sc-kGXeez fwOxAR">
                <div class="sc-kpOJdX jjQSDG">
                    <div class="sc-htpNat iZWQZt">
                        <div class="sc-htpNat gIOlFP">
                            <div class="sc-kGXeez kndIBh">
                                <div class="sc-kpOJdX kHHyUN">
                                    
                                </div>
                                <div class="sc-kpOJdX rRICf">
                                    <div class="sc-htpNat coYvaZ">
                                        <h2 class="sc-gZMcBi bNziyP poppins">Mulai Chat Dengan Trainer Gratis</h2>
                                        <p class="sc-gZMcBi jPfrZF">Konsultasi kesehatan, Teknik Gym dan lainnya</p>
                                    </div>
                                </div>
                                <li class="nav-item {{ setActive(['transaksi*']) }}">
                                    <a class="nav-link" href="{{route('transaksi.index')}}">
                                        <i class="menu-icon mdi mdi-backup-restore"></i>
                                        <button id="freeChatButton" class="sc-bxivhb fZDqdL sc-ifAKCX gpzUaD">Konsultasi</button>
                                    </a>
                                </li>
                            </div>
                        </div>


                        <div class="sc-htpNat iZWQZt">
                            <h1 class="sc-gZMcBi cAUqUo poppins">Chat Online Dengan Trainner</h1>
                            <div class="sc-htpNat iZWQZt">
                                <div class="sc-kGXeez cQHVVI">
                                    <div class="sc-kpOJdX fkaQQm">
                                        <div class="sc-htpNat tzMlU">
                                            <div class="sc-htpNat dyOqX">
                                                <div class="sc-htpNat iZWQZt">
                                                    <div class="sc-kGXeez gBesWK">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/hisar-daniel-spm.html" class="sc-gZMcBi sc-kAzzGY jXGOHm">
                                                                    <div class="sc-htpNat iZWQZt">
                                                                        <h3 class="sc-gZMcBi guRvVL poppins">Hisar Daniel</h3><span class="sc-gZMcBi cKuViW">Spesialis Kalestenik</span><span class="sc-gZMcBi iqzfMZ">SehatQ</span>
                                                                        <div class="sc-bdVaJa gAfqIm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" class="sc-elJkPf gjJYmt">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <path d="M0 0h14v14H0z"></path>
                                                                                    <path fill="#2b8e8e" d="M9.672 8.97c0 .12-.097.217-.216.217H8.053v1.402c0 .12-.096.216-.215.216H6.163a.216.216 0 01-.216-.216V9.187H4.544a.216.216 0 01-.216-.216V7.296c0-.12.097-.216.216-.216h1.403V5.678c0-.12.096-.216.216-.216h1.675c.119 0 .215.097.215.216V7.08h1.403c.12 0 .216.097.216.216V8.97zm-.815-6.754v1.32H5.143v-1.32h3.714zm3.467 1.32H9.673V2.19a.79.79 0 00-.79-.79H5.117a.79.79 0 00-.79.79v1.346h-2.65a1.21 1.21 0 00-1.21 1.21v6.775c0 .668.541 1.21 1.21 1.21h10.647a1.21 1.21 0 001.21-1.21V4.746a1.21 1.21 0 00-1.21-1.21z"></path>
                                                                                </g>
                                                                            </svg><span class="sc-gZMcBi jjyVGF">(
                                                                                <!-- -->12 Tahun
                                                                                <!-- -->)
                                                                            </span></div>
                                                                        <div class="sc-bdVaJa haHzMJ"><i class="sc-EHOje cykJDY"></i><span class="sc-gZMcBi eclwgZ">4.67</span><span class="sc-gZMcBi kZoqOI">(
                                                                                <!-- -->3
                                                                                <!-- -->)
                                                                            </span></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="sc-kpOJdX iyOQEG">
                                                            <div class="sc-htpNat hUdfYr"><a href="../dokter/hisar-daniel-spm.html" class="sc-gZMcBi sc-kAzzGY gDsSfP">
                                                                    <div class="sc-htpNat iZWQZt"><img alt=""  height="80" width="80" class="sc-jzJRlG hwfehS" />
                                                                        <div class="sc-kbGplQ hNLpLu"></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="sc-kGXeez iSeAmE">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/hisar-daniel-spm.html" class="sc-gZMcBi sc-kAzzGY jXGOHm"><span class="sc-gZMcBi krSoPt">Rp 50.000</span><span class="sc-gZMcBi fInzNX">Rp 25.000</span></a></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-kpOJdX fkaQQm">
                                        <div class="sc-htpNat gjzfoX">
                                            <div class="sc-htpNat dyOqX">
                                                <div class="sc-htpNat iZWQZt">
                                                    <div class="sc-kGXeez gBesWK">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/stumpal-andreas-c-mkedped-spa.html" class="sc-gZMcBi sc-kAzzGY jXGOHm">
                                                                    <div class="sc-htpNat iZWQZt">
                                                                        <h3 class="sc-gZMcBi guRvVL poppins">Sumpal Andreas</h3><span class="sc-gZMcBi cKuViW">Spesialis Kalestenik</span><span class="sc-gZMcBi iqzfMZ">SehatQ</span>
                                                                        <div class="sc-bdVaJa gAfqIm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" class="sc-elJkPf gjJYmt">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <path d="M0 0h14v14H0z"></path>
                                                                                    <path fill="#2b8e8e" d="M9.672 8.97c0 .12-.097.217-.216.217H8.053v1.402c0 .12-.096.216-.215.216H6.163a.216.216 0 01-.216-.216V9.187H4.544a.216.216 0 01-.216-.216V7.296c0-.12.097-.216.216-.216h1.403V5.678c0-.12.096-.216.216-.216h1.675c.119 0 .215.097.215.216V7.08h1.403c.12 0 .216.097.216.216V8.97zm-.815-6.754v1.32H5.143v-1.32h3.714zm3.467 1.32H9.673V2.19a.79.79 0 00-.79-.79H5.117a.79.79 0 00-.79.79v1.346h-2.65a1.21 1.21 0 00-1.21 1.21v6.775c0 .668.541 1.21 1.21 1.21h10.647a1.21 1.21 0 001.21-1.21V4.746a1.21 1.21 0 00-1.21-1.21z"></path>
                                                                                </g>
                                                                            </svg><span class="sc-gZMcBi jjyVGF">(
                                                                                <!-- -->11 Tahun
                                                                                <!-- -->)
                                                                            </span></div>
                                                                        <div class="sc-bdVaJa haHzMJ"><i class="sc-EHOje cykJDY"></i><span class="sc-gZMcBi eclwgZ">5</span><span class="sc-gZMcBi kZoqOI">(
                                                                                <!-- -->4
                                                                                <!-- -->)
                                                                            </span></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="sc-kpOJdX iyOQEG">
                                                            <div class="sc-htpNat hUdfYr"><a href="../dokter/stumpal-andreas-c-mkedped-spa.html" class="sc-gZMcBi sc-kAzzGY gDsSfP">
                                                                    <div class="sc-htpNat iZWQZt"><img alt="" src="" height="80" width="80" class="sc-jzJRlG hwfehS" />
                                                                        <div class="sc-kbGplQ hNLpLu"></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="sc-kGXeez iSeAmE">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/stumpal-andreas-c-mkedped-spa.html" class="sc-gZMcBi sc-kAzzGY jXGOHm"><span class="sc-gZMcBi krSoPt">Rp 50.000</span><span class="sc-gZMcBi fInzNX">Rp 25.000</span></a></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-kpOJdX fkaQQm">
                                        <div class="sc-htpNat tzMlU">
                                            <div class="sc-htpNat dyOqX">
                                                <div class="sc-htpNat iZWQZt">
                                                    <div class="sc-kGXeez gBesWK">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/hari-darmawan-spkk.html" class="sc-gZMcBi sc-kAzzGY jXGOHm">
                                                                    <div class="sc-htpNat iZWQZt">
                                                                        <h3 class="sc-gZMcBi guRvVL poppins">Hari Darmawan</h3><span class="sc-gZMcBi cKuViW">Spesialis Kalestenik</span><span class="sc-gZMcBi iqzfMZ">SehatQ</span>
                                                                        <div class="sc-bdVaJa gAfqIm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" class="sc-elJkPf gjJYmt">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <path d="M0 0h14v14H0z"></path>
                                                                                    <path fill="#2b8e8e" d="M9.672 8.97c0 .12-.097.217-.216.217H8.053v1.402c0 .12-.096.216-.215.216H6.163a.216.216 0 01-.216-.216V9.187H4.544a.216.216 0 01-.216-.216V7.296c0-.12.097-.216.216-.216h1.403V5.678c0-.12.096-.216.216-.216h1.675c.119 0 .215.097.215.216V7.08h1.403c.12 0 .216.097.216.216V8.97zm-.815-6.754v1.32H5.143v-1.32h3.714zm3.467 1.32H9.673V2.19a.79.79 0 00-.79-.79H5.117a.79.79 0 00-.79.79v1.346h-2.65a1.21 1.21 0 00-1.21 1.21v6.775c0 .668.541 1.21 1.21 1.21h10.647a1.21 1.21 0 001.21-1.21V4.746a1.21 1.21 0 00-1.21-1.21z"></path>
                                                                                </g>
                                                                            </svg><span class="sc-gZMcBi jjyVGF">(
                                                                                <!-- -->8 Tahun
                                                                                <!-- -->)
                                                                            </span></div>
                                                                        <div class="sc-bdVaJa haHzMJ"><i class="sc-EHOje cykJDY"></i><span class="sc-gZMcBi eclwgZ">4.8</span><span class="sc-gZMcBi kZoqOI">(
                                                                                <!-- -->83
                                                                                <!-- -->)
                                                                            </span></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="sc-kpOJdX iyOQEG">
                                                            <div class="sc-htpNat hUdfYr"><a href="../dokter/hari-darmawan-spkk.html" class="sc-gZMcBi sc-kAzzGY gDsSfP">
                                                                    <div class="sc-htpNat iZWQZt"><img alt="" src="" height="80" width="80" class="sc-jzJRlG hwfehS" />
                                                                        <div class="sc-kbGplQ hNLpLu"></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="sc-kGXeez iSeAmE">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/hari-darmawan-spkk.html" class="sc-gZMcBi sc-kAzzGY jXGOHm"><span class="sc-gZMcBi krSoPt">Rp 50.000</span><span class="sc-gZMcBi fInzNX">Rp 25.000</span></a></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-kpOJdX fkaQQm">
                                        <div class="sc-htpNat gjzfoX">
                                            <div class="sc-htpNat dyOqX">
                                                <div class="sc-htpNat iZWQZt">
                                                    <div class="sc-kGXeez gBesWK">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/farah-36.html" class="sc-gZMcBi sc-kAzzGY jXGOHm">
                                                                    <div class="sc-htpNat iZWQZt">
                                                                        <h3 class="sc-gZMcBi guRvVL poppins">Fara Anggraeni</h3><span class="sc-gZMcBi cKuViW">Spesialis Kalestenik</span><span class="sc-gZMcBi iqzfMZ">SehatQ</span>
                                                                        <div class="sc-bdVaJa gAfqIm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" class="sc-elJkPf gjJYmt">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <path d="M0 0h14v14H0z"></path>
                                                                                    <path fill="#2b8e8e" d="M9.672 8.97c0 .12-.097.217-.216.217H8.053v1.402c0 .12-.096.216-.215.216H6.163a.216.216 0 01-.216-.216V9.187H4.544a.216.216 0 01-.216-.216V7.296c0-.12.097-.216.216-.216h1.403V5.678c0-.12.096-.216.216-.216h1.675c.119 0 .215.097.215.216V7.08h1.403c.12 0 .216.097.216.216V8.97zm-.815-6.754v1.32H5.143v-1.32h3.714zm3.467 1.32H9.673V2.19a.79.79 0 00-.79-.79H5.117a.79.79 0 00-.79.79v1.346h-2.65a1.21 1.21 0 00-1.21 1.21v6.775c0 .668.541 1.21 1.21 1.21h10.647a1.21 1.21 0 001.21-1.21V4.746a1.21 1.21 0 00-1.21-1.21z"></path>
                                                                                </g>
                                                                            </svg><span class="sc-gZMcBi jjyVGF">(
                                                                                <!-- -->5 Tahun
                                                                                <!-- -->)
                                                                            </span></div>
                                                                        <div class="sc-bdVaJa haHzMJ"><i class="sc-EHOje cykJDY"></i><span class="sc-gZMcBi eclwgZ">4.95</span><span class="sc-gZMcBi kZoqOI">(
                                                                                <!-- -->82
                                                                                <!-- -->)
                                                                            </span></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="sc-kpOJdX iyOQEG">
                                                            <div class="sc-htpNat hUdfYr"><a href="../dokter/farah-36.html" class="sc-gZMcBi sc-kAzzGY gDsSfP">
                                                                    <div class="sc-htpNat iZWQZt"><img alt="" src="" height="80" width="80" class="sc-jzJRlG hwfehS" />
                                                                        <div class="sc-kbGplQ hNLpLu"></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="sc-kGXeez iSeAmE">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/farah-36.html" class="sc-gZMcBi sc-kAzzGY jXGOHm"><span class="sc-gZMcBi krSoPt">Rp 30.000</span><span class="sc-gZMcBi fInzNX">Rp 20.000</span></a></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-kpOJdX fkaQQm">
                                        <div class="sc-htpNat tzMlU">
                                            <div class="sc-htpNat dyOqX">
                                                <div class="sc-htpNat iZWQZt">
                                                    <div class="sc-kGXeez gBesWK">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/muhammad-fikri-fadli.html" class="sc-gZMcBi sc-kAzzGY jXGOHm">
                                                                    <div class="sc-htpNat iZWQZt">
                                                                        <h3 class="sc-gZMcBi guRvVL poppins">Fikri Fadli</h3><span class="sc-gZMcBi cKuViW">Spesialis Kalestenik</span><span class="sc-gZMcBi iqzfMZ">Praktek dr. M. Fikri Fadli</span>
                                                                        <div class="sc-bdVaJa gAfqIm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" class="sc-elJkPf gjJYmt">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <path d="M0 0h14v14H0z"></path>
                                                                                    <path fill="#2b8e8e" d="M9.672 8.97c0 .12-.097.217-.216.217H8.053v1.402c0 .12-.096.216-.215.216H6.163a.216.216 0 01-.216-.216V9.187H4.544a.216.216 0 01-.216-.216V7.296c0-.12.097-.216.216-.216h1.403V5.678c0-.12.096-.216.216-.216h1.675c.119 0 .215.097.215.216V7.08h1.403c.12 0 .216.097.216.216V8.97zm-.815-6.754v1.32H5.143v-1.32h3.714zm3.467 1.32H9.673V2.19a.79.79 0 00-.79-.79H5.117a.79.79 0 00-.79.79v1.346h-2.65a1.21 1.21 0 00-1.21 1.21v6.775c0 .668.541 1.21 1.21 1.21h10.647a1.21 1.21 0 001.21-1.21V4.746a1.21 1.21 0 00-1.21-1.21z"></path>
                                                                                </g>
                                                                            </svg><span class="sc-gZMcBi jjyVGF">(
                                                                                <!-- -->4 Tahun
                                                                                <!-- -->)
                                                                            </span></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="sc-kpOJdX iyOQEG">
                                                            <div class="sc-htpNat hUdfYr"><a href="../dokter/muhammad-fikri-fadli.html" class="sc-gZMcBi sc-kAzzGY gDsSfP">
                                                                    <div class="sc-htpNat iZWQZt"><img alt="" src="" height="80" width="80" class="sc-jzJRlG hwfehS" />
                                                                        <div class="sc-kbGplQ hNLpLu"></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="sc-kGXeez iSeAmE">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/muhammad-fikri-fadli.html" class="sc-gZMcBi sc-kAzzGY jXGOHm"><span class="sc-gZMcBi fInzNX">Rp 20.000</span></a></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-kpOJdX fkaQQm">
                                        <div class="sc-htpNat gjzfoX">
                                            <div class="sc-htpNat dyOqX">
                                                <div class="sc-htpNat iZWQZt">
                                                    <div class="sc-kGXeez gBesWK">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/cecilia-sagita-m-psi-psikolog.html" class="sc-gZMcBi sc-kAzzGY jXGOHm">
                                                                    <div class="sc-htpNat iZWQZt">
                                                                        <h3 class="sc-gZMcBi guRvVL poppins"> Cecilia Anggraeni</h3><span class="sc-gZMcBi cKuViW">Spesialis Kalestenik</span><span class="sc-gZMcBi iqzfMZ">Nest Indonesia (Lembaga Psikologi)</span>
                                                                        <div class="sc-bdVaJa gAfqIm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" class="sc-elJkPf gjJYmt">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <path d="M0 0h14v14H0z"></path>
                                                                                    <path fill="#2b8e8e" d="M9.672 8.97c0 .12-.097.217-.216.217H8.053v1.402c0 .12-.096.216-.215.216H6.163a.216.216 0 01-.216-.216V9.187H4.544a.216.216 0 01-.216-.216V7.296c0-.12.097-.216.216-.216h1.403V5.678c0-.12.096-.216.216-.216h1.675c.119 0 .215.097.215.216V7.08h1.403c.12 0 .216.097.216.216V8.97zm-.815-6.754v1.32H5.143v-1.32h3.714zm3.467 1.32H9.673V2.19a.79.79 0 00-.79-.79H5.117a.79.79 0 00-.79.79v1.346h-2.65a1.21 1.21 0 00-1.21 1.21v6.775c0 .668.541 1.21 1.21 1.21h10.647a1.21 1.21 0 001.21-1.21V4.746a1.21 1.21 0 00-1.21-1.21z"></path>
                                                                                </g>
                                                                            </svg><span class="sc-gZMcBi jjyVGF">(
                                                                                <!-- -->8 Tahun
                                                                                <!-- -->)
                                                                            </span></div>
                                                                        <div class="sc-bdVaJa haHzMJ"><i class="sc-EHOje cykJDY"></i><span class="sc-gZMcBi eclwgZ">5</span><span class="sc-gZMcBi kZoqOI">(
                                                                                <!-- -->5
                                                                                <!-- -->)
                                                                            </span></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="sc-kpOJdX iyOQEG">
                                                            <div class="sc-htpNat hUdfYr"><a href="../dokter/cecilia-sagita-m-psi-psikolog.html" class="sc-gZMcBi sc-kAzzGY gDsSfP">
                                                                    <div class="sc-htpNat iZWQZt"><img alt=" " src="" height="80" width="80" class="sc-jzJRlG hwfehS" />
                                                                        <div class="sc-kbGplQ bJXBxk"></div>
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="sc-kGXeez iSeAmE">
                                                        <div class="sc-kpOJdX hRSNWf">
                                                            <div class="sc-htpNat iZWQZt"><a href="../dokter/cecilia-sagita-m-psi-psikolog.html" class="sc-gZMcBi sc-kAzzGY jXGOHm"><span class="sc-gZMcBi fInzNX">Rp 25.000</span></a></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="sc-bdVaJa ibWqaM">
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc-kpOJdX kHHyUN">
                    <div class="sc-htpNat koVvRh">
                        <div class="sc-htpNat bQNLXy">
                            <div class="sc-bdVaJa bvpXLt">
                                <p class="sc-gZMcBi hyekWb poppins">Lokasi Gym Malang</p><a href="../faskes.html" class="sc-gZMcBi sc-kAzzGY bHzzUt">Lihat Semua</a>
                            </div>
                            <p class="sc-gZMcBi jyZvev">Raihlah Kesehatan maksimal dengan datang ke Gym Terdekat</p>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="Skinholic Clinic " 
                                                src="konsultasi/wwwgym.jpg" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">WWW GYM MALANG </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="Dental White" 
                                                src="konsultasi/prestige.jpg" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">PRESTIGO FITNESS MALANG</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="K Dental Care" 
                                                src="https://static.sehatq.com/telemed/hospital_logo/20210208103036" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">KIKI GYM</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="SehatQ" src="https://static.sehatq.com/telemed/hospital_logo/20201021141952" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">AREMA GYM</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="Klinik Family Medika" src="https://static.sehatq.com/telemed/hospital_logo/20210208135737" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">EGY GYM</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="A8 Dental " src="https://static.sehatq.com/telemed/hospital_logo/20210211104838" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">BEST GYM</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="RSU Kartini Mojokerto" src="https://static.sehatq.com/telemed/hospital_logo/20210303095607" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">BODY GYM</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="RSIA Santo Yusuf Tanjung Priok" src="https://static.sehatq.com/telemed/hospital_logo/20210406152746" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">UB SPORT CENTER</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat fWDdGt">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="RS Lancang Kuning" src="https://static.sehatq.com/telemed/hospital_logo/20210415142425" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">ATLAS SPORT CLUB </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                            <div class="sc-htpNat eXWmgD">
                                <div class="sc-htpNat iZWQZt"><a class="sc-gZMcBi sc-kAzzGY jXGOHm Anchor-NexLink-Function">
                                        <div class="sc-kGXeez kndIBh">
                                            <div class="sc-kpOJdX kHHyUN">
                                                <div class="sc-htpNat dpeyZH"><img alt="Zio Clinic Batam" src="https://static.sehatq.com/telemed/hospital_logo/20210901175526" width="64" height="64" class="sc-jzJRlG cUTtVS" /></div>
                                            </div>
                                            <div class="sc-kpOJdX rRICf">
                                                <div class="sc-htpNat iZnvsW">
                                                    <h3 class="sc-gZMcBi bjTbnS poppins">PROFIT GYM</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
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


    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="vidtutor/jquery/jquery.min.js"></script>
    <script src="vidtutor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vidtutor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Owl Carousel -->
    <script src="vidtutor/owl-carousel/owl.carousel.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="vidtutor/js/custom1.js"></script>
</body>

</html>
@endsection