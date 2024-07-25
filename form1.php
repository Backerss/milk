<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/include_header.php") ?>
</head>
<body>

  <!-- ***** เริ่มการโหลดล่วงหน้า ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** สิ้นสุดการโหลดล่วงหน้า ***** -->

  <!-- ***** เริ่มพื้นที่ส่วนก่อนส่วนหัว ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+66 2264 7041</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>asan.r@nsru.ac.th</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>NSRU</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** สิ้นสุดพื้นที่ส่วนก่อนส่วนหัว ***** -->

    <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** เริ่มโลโก้ ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="" style="max-width: 112px;">
            </a>
            <!-- ***** สิ้นสุดโลโก้ ***** -->
            <!-- ***** เริ่มเมนู ***** -->
            <?php include("nav_bar.php") ?>
            <a class='menu-trigger'>
              <span>เมนู</span>
            </a>
            <!-- ***** สิ้นสุดเมนู ***** -->
          </nav>
        </div>
      </div>
    </div>
    </header>
    

    <div class="container main-content">
        <div class="row">
            <div class="col-lg-5">
                <h1>Hello lorem</h1>
            </div>
        </div>
    </div>


    <?php include("include/include_footer.php") ?>
</body>

    <?php include("include/include_script.php") ?>
</html>