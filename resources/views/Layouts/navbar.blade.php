<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <style>

        .navbar {
    box-shadow: none;
    opacity: 0.8;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* ตั้งค่า z-index เพื่อให้ Navbar อยู่ข้างหน้าสุด */
    background-color: transparent; /* ลบพื้นหลัง */
}


        .navbar.is-scroll {
            background-color: rgba(251, 232, 166, 0);
        }

        .navbar-brand img {

            width: 130px;
            /* กำหนดความกว้างของภาพ */
            height: 70px;
            /* ให้สูงของภาพปรับอัตโนมัติเพื่อรักษาสัดส่วน */
        }

        /* จัดเรียงเมนูไปด้านขวา */
        .navbar-nav {
            margin-left: auto;
        }

        .navbar-nav .nav-item {
            margin-left: 10px;
            /* ระยะห่างระหว่างเมนู */
        }

        .navbar-nav .nav-link {
    color: #101010; /* เปลี่ยนสีตัวหนังสือในเมนูเป็นสี warning */
}
        /* ปิดการใช้งาน sticky เมื่อเป็นมือถือ */
        @media (max-width: 991.98px) {
            .navbar {
                position: static !important;
            }
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a href="your-link-url" class="navbar-brand">
                <img src="../assets/img/Logoorakit.png" alt="Your Image" class="mr-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ '/' }}">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'about' }}">เกี่ยวกับ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'property' }}">ทรัพย์สิน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'contact' }}">ติดต่อ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



</body>

</html>
