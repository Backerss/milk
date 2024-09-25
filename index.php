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

  <!-- ***** เริ่มพื้นที่ส่วนหัว ***** -->
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
            <?php include("include/nav_bar.php") ?>
            <a class='menu-trigger'>
              <span>เมนู</span>
            </a>
            <!-- ***** สิ้นสุดเมนู ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** สิ้นสุดพื้นที่ส่วนหัว ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>SEO DIGITAL AGENCY</h6>
            <div class="line-dec"></div>
            <h4>ดำดิ่ง <em>เข้าสู่โลก SEO</em> <span>กับ Tale</span></h4>
            <p>Tale เป็นเทมเพลตเว็บไซต์เอเจนซี่ SEO ที่ดีที่สุดใช้ Bootstrap v5.2.2 CSS สำหรับบริษัทของคุณ เป็นการดาวน์โหลดฟรีที่ให้บริการโดย TemplateMo มี 3 หน้า HTML, <a href="index.html">หน้าแรก</a>, <a href="about.html">เกี่ยวกับ</a>, และ <a href="faqs.html">คำถามที่พบบ่อย</a>.</p>
            <div class="main-button scroll-to-section"><a href="#services">ค้นพบเพิ่มเติม</a></div>
            <span>หรือ</span>
            <div class="second-button"><a href="faqs.html">ตรวจสอบคำถามที่พบบ่อยของเรา</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>เราให้บริการ <em>หลากหลาย</em> &amp; <span>คุณสมบัติ</span> สำหรับเอเจนซี่ของคุณ</h2>
                <div class="line-dec"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-01.jpg" alt="ค้นหา SEO" class="templatemo-feature">
                </div>
                <h4>ค้นหาข้อมูลเพิ่มเติมเกี่ยวกับแนวโน้ม SEO ล่าสุด</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-02.jpg" alt="การวิเคราะห์ข้อมูล" class="templatemo-feature">
                </div>
                <h4>การวิเคราะห์ข้อมูลขนาดใหญ่แบบเรียลไทม์</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-03.jpg" alt="ข้อมูลที่แม่นยำ" class="templatemo-feature">
                </div>
                <h4>การวิเคราะห์ข้อมูล &amp; การทำนายที่แม่นยำ</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-04.jpg" alt="การตลาด SEO" class="templatemo-feature">
                </div>
                <h4>การตลาด SEO &amp; สื่อสังคมออนไลน์</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>ค้นพบงานของเรา <em> &amp; <span>โครงการ</span></h2>
            <div class="line-dec"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel">
            <div class="item">
              <img src="assets/images/projects-01.jpg" alt="">
              <div class="down-content">
                <h4>เทมเพลต HTML เอเจนซี่ดิจิทัล</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-02.jpg" alt="">
              <div class="down-content">
                <h4>เทมเพลต CSS แดชบอร์ดผู้ดูแลระบบ</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-03.jpg" alt="">
              <div class="down-content">
                <h4>เลย์เอาต์เว็บไซต์ที่ตอบสนองดีที่สุด</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-04.jpg" alt="">
              <div class="down-content">
                <h4>เลย์เอาต์ HTML CSS สำหรับเว็บไซต์ของคุณ</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-02.jpg" alt="">
              <div class="down-content">
                <h4>ธีม Bootstrap 5 ฟรี</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-03.jpg" alt="">
              <div class="down-content">
                <h4>เลย์เอาต์เว็บไซต์ที่เป็นมิตรกับมือถือ</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="infos section" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="assets/images/left-infos.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2>เพิ่มเติม <em>เกี่ยวกับเรา</em> &amp; สิ่งที่ <span>เรามอบให้</span></h2>
                  <div class="line-dec"></div>
                  <p>คุณสามารถใช้เทมเพลตนี้ได้ฟรีเพื่อวัตถุประสงค์ใด ๆ คุณไม่ได้รับอนุญาตให้แจกจ่ายไฟล์ ZIP ของ Tale SEO Template ที่ดาวน์โหลดได้ในเว็บไซต์เทมเพลตอื่นใด กรุณาติดต่อเรา ขอบคุณ.</p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>การตลาด</h6>
                    <span>90%</span>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>สื่อดิจิทัล</h6>
                    <span>80%</span>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>การจัดการสื่อสังคมออนไลน์</h6>
                    <span>95%</span>
                  </div>
                </div>
                <p class="more-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor incididunt ut labore et dolore dolor dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                    width="100%" height="670px" frameborder="0" style="border:0; border-radius: 23px;"
                    allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-8">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>ติดต่อเรา</em> &amp; ติดต่อ <span>เรา</span></h2>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="ชื่อของคุณ..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="นามสกุลของคุณ..."
                          autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="อีเมลของคุณ..."
                          required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="หัวข้อ..." autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="ข้อความของคุณ"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">ส่งข้อความทันที</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="#">010-020-0340</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="#">info@company.com</a></h4>
                        <h4><a href="#">hello@company.com</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="#">Sunny Isles Beach, FL 33160, สหรัฐอเมริกา</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <?php include("include/include_footer.php") ?>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <?php include("include/include_script.php") ?>

</body>


</html>