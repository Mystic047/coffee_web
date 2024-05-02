<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/fancybox/css/jquery.fancybox.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/welcome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>

</style>
@extends('layouts.master')
@section('content')
<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>

        <div class="page-nnebar home-banner mb-5" >
            <div class="slider-wrapper">
                <div class="owl-carousel hero-carousel">
                    <div class="hero-carousel-item">
                        <img src="../assets/img/team1.jpg"
                        {{-- <img src="https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg" --}}
                            alt="">
                        <div class="img-caption">
                            <div class="subhead"><h2>บริษัท อรกิต (ไทยแลนด์) จำกัด</h2></div>
                            <span class="fg-warning"><h1 class="mb-4">ORAKIT (THAILAND) CO., LTD</h1></span>
                            {{-- <a href="#services" class="btn btn-outline-light">Get Started</a> --}}
                        </div>
                    </div>
                </div>
            </div> <!-- .slider-wrapper -->
        </div> <!-- .page-banner -->
    </header>

    <main>

        <div class="page-section even-row ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3">
                        <div class="subhead"></div>
                        <h2 class="title-section">ทำความรู้จักกับ <br><span class="fg-warning">บริษัท อรกิต ไทยแลนด์ จํากัด. <br>(ORAKIT
                            THAILAND Co.Ltd)</span>
                            </h2>

                        <p style=" color: #000000 "> บริษัท อรกิต ไทยแลนด์ จํากัด. (ORAKIT
                            THAILAND Co.Ltd) มีนายอรกิต เพ็งแจ่มเป็นประธานบริษัท สํานักงานตั้งอยู่ที่ 29 หมู่ 7 บ้านโนนแดง-โนนม่วง ต.ทุ่งไชย อ.อุทุมพรพิสัย จ.ศรีสะเกษ
                            พร้อมด้วย นาย พุธทะสอน สร้อยมณีวรรณ เป็นประธานบริษัท PHET MEUANGLAO TRADING
                            IMPORT-EXPORT SOLE Co.,Ltd โดยมีสํานักงานตั้งอยู่ที่ บ้านสีไคทอง อ.สีโคตรบอง นครหลวงเวียงจันท สปป.ลาว มีวัตถุประสงค์ที่ต้อง
                             ขอยื่นร่วมลงทุนพัฒนาขยายพื้นที่เพาะปลูกและปรับปรุงมาตรฐานเมล็ดกาแฟเพื่อการส่งออกโดยทั้งสองฝ่ายร่วมกันในรูปแบบการลงทุนให้กับ
                             บริษัท อรกิตไทยแลนด์ จํากัด ตามความเหมาะสม (รายละเอียดสัญญาและสัญญาซื้อขายเมล็ดกาแฟอย่างเป็นทางการ) โดยติดตามกันในธุรกิจ
                             ซื้อขายเมล็ดการแฟ เพื่อการนําเข้า-ส่งออก</p>

                        <a href=" {{ 'about' }} " class="btn btn-primary mt-4">อ่านเพิ่มเติม</a>
                    </div>
                    <div class="col-lg-6 py-3">
                        <div class="about-img">
                            <img src="../assets/img/Logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->
        <div class="page-section odd-row bg-dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 order-lg-2">
                        <div class="subhead"></div>
                        <h2 class="title-section fg-white" style="white-space: nowrap;">นายอรกิต เพ็งแจ่ม <br>
                            <span class="fg-warning">Mr.Orakit Pengjam</span>
                            <br>ประธานบริษัทอรกิต ไทยแลนด์ จํากัด. <br>
                            <span class="fg-warning">(ORAKIT THAILAND Co.Ltd)</span></h2>
                    </div>

                    <div class="col-lg-6 py-3 order-lg-1">
                        <div class="ceo-img">
                            <img src="../assets/img/ceo.png" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- .page-section -->


        <div class="page-section even-row">
            <div class="container">
                <div class="text-center">
                    <div class="subhead">กรมพัฒนาธุรกิจการค้า</div>
                    <h2 class="title-section">ใบสำคัญแสดงการจดทะเบียนห้างหุ้นส่วนบริษัท</h2>
                </div>

                <div class="owl-carousel team-carousel mt-5">
                    <div class="team-wrap">
                        <div class="team-profile">
                            <img src="../assets/img/teams/oara3.png" alt="">
                        </div>
                    </div>
                    <div class="team-wrap">
                        <div class="team-profile">
                            <img src="../assets/img/teams/oara2.png" alt="">
                        </div>
                    </div>
                    <div class="team-wrap">
                        <div class="team-profile">
                            <img src="../assets/img/teams/oara1.png" alt="">
                        </div>

                    </div>

                </div>

            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="page-section even-row">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 py-3">
                        <div class="subhead"></div>
                        <h2 class="title-section">รูปงานกิจกรรมและทรัพย์สิน</h2>
                    </div>
                    <div class="col-md-6 py-3 text-md-right">
                        <a href="{{ 'property' }}" class="btn btn-outline-primary">ดูเพิ่มเติม <span
                                class="mai-arrow-forward ml-2"></span></a>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-4 py-3">
                        <div class="portfolio">
                            <a href="../assets/img/portfolio/work3.png" data-fancybox="portfolio">
                                <img src="../assets/img/portfolio/work3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div class="portfolio">
                            <a href="../assets/img/portfolio/work5.png" data-fancybox="portfolio">
                                <img src="../assets/img/portfolio/work5.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div class="portfolio">
                            <a href="../assets/img/portfolio/work4.png" data-fancybox="portfolio">
                                <img src="../assets/img/portfolio/work4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div class="portfolio">
                            <a href="../assets/img/portfolio/work1.png" data-fancybox="portfolio">
                                <img src="../assets/img/portfolio/work1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div class="portfolio">
                            <a href="../assets/img/portfolio/work2.png" data-fancybox="portfolio">
                                <img src="../assets/img/portfolio/work2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div class="portfolio">
                            <a href="../assets/img/construct1.png" data-fancybox="portfolio">
                                <img src="../assets/img/construct1.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <!-- Testimonials -->

    </main>

    <footer class="page-footer bg-dark" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-3">
                    <h3>บริษัทอรกิต ไทยแลนด์ จํากัด. <br>
                        <span class="fg-warning">ORAKIT THAILAND Co.Ltd</span></h2>
                    </div>
                <div class="col-lg-4 py-3">
                    <h3>ติดต่อ</h3>
                    <p>29 หมู่ที่ 7 ตำบลทุ่งไชย อำเภออุทุมพรพิสัย จ.ศรีสะเกษ 33120.</p>
                    <p>อีเมล: orakit.p@mail.com</p>
                    <p>โทรศัพท์: 088-331-0359</p>
                </div>

            </div>

            <hr>

            {{-- <div class="row mt-4">
                <div class="col-md-6">
                    <p>Copyright 2020. This template designed by <a href="https://macodeid.com">MACode ID</a></p>
                </div>
            </div> --}}
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>
    <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="../assets/js/google-maps.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
    <!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

</body>
@endsection
</html>
