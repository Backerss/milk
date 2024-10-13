<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container--">
      <div class="forms-container">
        <div class="signin-signup">

          <form class="sign-in-form">
            <h2 class="title">เข้าสู่ระบบ</h2>
            <div class="input-field">
               <i class="fa-solid fa-envelope"></i>
              <input type="text" placeholder="Email" name="user_email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="user_password" />
            </div>
            <button id="submit-login" class="btn solid">เข้าสู่ระบบ</button>
          </form>

          <form class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="firstname" placeholder="ชื่อจริง" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="lastname" placeholder="นามสกุล" />
            </div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <button id="submit-register" class="btn btn-primary">สมัครสมาชิก</button>
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>ไม่มีบัญชีหรอ?</h3>
            <p>
               ลงทะเบียนเพื่อเข้าสู่ระบบ ที่นี่ได้เลยนะ เพื่อรับประสบการณ์ที่ดีของคุณอย่างไงล่ะ
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="" class="image" alt="" />
        </div>
      </div>
    </div>
  </body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="../../assets/js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
  $(document).ready(function() {
    $('#submit-register').on('click', function(event) {
    event.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ
                
    $.ajax({
        url: '../system/save_regis.php', // เปลี่ยนเป็น path ของไฟล์ PHP
        type: 'POST',
        data: {
        firstname: $('input[name="firstname"]').val(),
        lastname: $('input[name="lastname"]').val(),
        email: $('input[name="email"]').val(),
        password: $('input[name="password"]').val()
        },
        dataType: 'json',
        success: function(response) {
        // แสดง SweetAlert ตามผลลัพธ์ที่ได้รับ
            Swal.fire({
              icon: response.status === 'success' ? 'success' : 'error',
              title: response.message,
              showConfirmButton: true
            }).then((result) => {
              if (result.isConfirmed) {
                if (response.status === 'success') {
                  $('.container--').removeClass('sign-up-mode');
                  //clear content at input
                  $('input[name="firstname"]').val('');
                  $('input[name="lastname"]').val('');
                  $('input[name="email"]').val('');
                  $('input[name="password"]').val('');

              }
            }
            });
        },
        error: function(err) {
        Swal.fire({
        icon: 'error',
        title: 'เกิดข้อผิดพลาดในการสมัครสมาชิก',
        showConfirmButton: true
        });
        }
        });
    });
  });

  $(document).ready(function() {
    $('#submit-login').on('click', function(event) {
    event.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ
                
    $.ajax({
        url: '../system/check_login.php', // เปลี่ยนเป็น path ของไฟล์ PHP
        type: 'POST',
        data: {
        user_email: $('input[name="user_email"]').val(),
        user_password: $('input[name="user_password"]').val()
        },
        dataType: 'json',
        success: function(response) {
        // แสดง SweetAlert ตามผลลัพธ์ที่ได้รับ
            Swal.fire({
            icon: response.status === 'success' ? 'success' : 'error',
            title: response.message,
            showConfirmButton: true
        }).then((result) => {
            if (result.isConfirmed) {
              if (response.status === 'success') {
                window.location.href = '../dashboard/index.php?data-page=home';
              }
            }
          });
        },
        error: function(err) {
          Swal.fire({
          icon: 'error',
          title: 'เกิดข้อผิดพลาดในการเข้าสู่ระบบ',
          showConfirmButton: true
          });

          console.log(err);
        }
        });
    });
  });


</script>

</html>
