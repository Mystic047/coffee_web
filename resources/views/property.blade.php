<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Property</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/fancybox/css/jquery.fancybox.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="../assets/css/property.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .portfolio img {
  width: 100%; /* ทำให้ภาพมีความกว้างเต็มขอบของพื้นที่ที่ระบุไว้ */
  height: 250px; /* ให้สูงของภาพปรับอัตโนมัติตามอัตราส่วนของภาพ */
}

</style>

</head>
@extends('layouts.master')
@section('content')
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>



    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/property.png);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>
                <li class="breadcrumb-item active" aria-current="page">ทรัพย์สินที่เกี่ยวข้อง</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">ทรัพย์สินที่เกี่ยวข้อง</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="filterable-btn">
          <button class="btn active" data-filter="*">ทั้งหมด</button>
          <button class="btn" data-filter=".web">สวนกาแฟ</button>
          <button class="btn" data-filter=".mobile">ยานพาหนะ</button>
          <button class="btn" data-filter=".home">โรงงาน</button>
        </div>

        <div class="grid mt-3">
          <div class="grid-item mobile">
            <div class="portfolio">
              <a href="../assets/img/property/car1.png" data-fancybox="portfolio">
                <img src="../assets/img/property/car1.png" alt="">
              </a>
            </div>
          </div>

          <div class="grid-item web desktop">
            <div class="portfolio">
              <a href="../assets/img/property/suan4.png" data-fancybox="portfolio">
                <img src="../assets/img/property/suan4.png" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item home">
            <div class="portfolio">
              <a href="../assets/img/construct1.png" data-fancybox="portfolio">
                <img src="../assets/img/construct1.png" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item mobile">
            <div class="portfolio">
                <a href="../assets/img/property/car2.png" data-fancybox="portfolio">
                  <img src="../assets/img/property/car2.png" alt="">
                </a>
              </div>
          </div>
          <div class="grid-item web ">
            <div class="portfolio">
              <a href="../assets/img/property/suan1.png" data-fancybox="portfolio">
                <img src="../assets/img/property/suan1.png" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item web">
            <div class="portfolio">
              <a href="../assets/img/property/suan5.png" data-fancybox="portfolio">
                <img src="../assets/img/property/suan5.png" alt="">
              </a>
            </div>
          </div>
          <div class="grid-item mobile">
            <div class="portfolio">
                <a href="../assets/img/property/car3.png" data-fancybox="portfolio">
                  <img src="../assets/img/property/car3.png" alt="">
                </a>
              </div>
          </div>
          <div class="grid-item home">
            <div class="portfolio">
                <a href="../assets/img/construct2.png" data-fancybox="portfolio">
                  <img src="../assets/img/construct2.png" alt="">
                </a>
              </div>
          </div>
          <div class="grid-item home">
            <div class="portfolio">
                <a href="../assets/img/construct3.png" data-fancybox="portfolio">
                  <img src="../assets/img/construct3.png" alt="">
                </a>
              </div>
          </div>

        </div> <!-- .grid -->

      </div> <!-- .container -->
    </div> <!-- .page-section -->
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
@endsection
</html>
