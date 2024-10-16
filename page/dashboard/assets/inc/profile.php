<?php
session_start(); 

include '../../../../data/db.php';

$checkupdate = selectData($conn, "SELECT * FROM users WHERE users_id = '".$_SESSION['user_data']['user_id']."'");
$hashUser = $checkupdate->fetch_assoc();

if($checkupdate && $checkupdate->num_rows > 0){
    $userData = [
        'user_id' => $hashUser['users_id'],
        'user_prefix' => $hashUser['users_prefix'],
        'user_name' => $hashUser['users_name'],
        'user_lastname' => $hashUser['users_lastname'],
        'user_mail' => $hashUser['users_mail'],
        'user_phone' => $hashUser['users_phone'],
        'user_date' => $hashUser['users_date'],
        'user_add' => $hashUser['users_add'],
        'users_code' => $hashUser['users_code'],
        'users_regis' => $hashUser['users_regis'],
        'users_rank' => $hashUser['users_rank']
    ];
    $_SESSION['user_data'] = $userData;
    $rankName = getRankNameById($conn, $_SESSION['user_data']['users_rank']);
}



?>
<div class="content-show">
<div class="main-body">

    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="assets/img/user.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4><?php echo $_SESSION["user_data"]["user_name"], " ", $_SESSION["user_data"]["user_lastname"]; ?></h4>
                <p class="text-secondary mb-1"><?php echo $rankName; ?></p>
                <p class="text-muted font-size-sm"><?php if(isset($_SESSION["user_data"]["user_add"])) echo $_SESSION["user_data"]["user_add"]; else echo "No address"; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $_SESSION["user_data"]["user_prefix"]," ", $_SESSION["user_data"]["user_name"], " ", $_SESSION["user_data"]["user_lastname"]; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
              <?php echo $_SESSION["user_data"]["user_mail"]; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
              <?php echo $_SESSION["user_data"]["user_phone"]; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Date</h6>
              </div>
              <div class="col-sm-9 text-secondary">
              <?php echo $_SESSION["user_data"]["user_date"]; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
              <?php if(isset($_SESSION["user_data"]["user_add"])) echo $_SESSION["user_data"]["user_add"]; else echo "No address"; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Code</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php if(isset($_SESSION["user_data"]["users_code"])) echo $_SESSION["user_data"]["users_code"]; else echo "N/A"; ?>
              </div>
            </div>
            <hr>
            <?php if($_SESSION["user_data"]["users_rank"] == 2){ ?>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Register Date</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php if(isset($_SESSION["user_data"]["users_regis"])) echo $_SESSION["user_data"]["users_regis"]; else echo "N/A"; ?>
              </div>
            </div>
            <hr>
            <?php } ?>
            <div class="row">
              <div class="col-sm-12">
                <a class="btn btn-info"href="#" data-bs-toggle="modal" data-bs-target="#editprofile">Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  

  <div class="modal fade" id="editprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">แก้ไขโปรไฟล์</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg">
              <div class="mb-3">
                <label for="prefix" class="col-form-label">Prefix:</label>
                <select class="form-select" id="prefix" name="prefix">
                  <option value="นาย" <?php if($_SESSION["user_data"]["user_prefix"] == "นาย") echo "selected"; ?>>นาย</option>
                  <option value="นางสาว" <?php if($_SESSION["user_data"]["user_prefix"] == "นางสาว") echo "selected"; ?>>นางสาว</option>
                  <option value="นาง" <?php if($_SESSION["user_data"]["user_prefix"] == "นาง") echo "selected"; ?>>นาง</option>
                </select>
              </div>
            </div>
            <div class="col-lg">
              <div class="mb-3">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION["user_data"]["user_name"]; ?>">
              </div>
            </div>
            <div class="col-lg">
              <div class="mb-3">
                <label for="lastname" class="col-form-label">Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $_SESSION["user_data"]["user_lastname"]; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">
              <div class="mb-3">
                <label for="lastname" class="col-form-label">Birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $_SESSION["user_data"]["user_date"]; ?>">
              </div>
            </div>
            <div class="col-lg">
              <div class="mb-3">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_SESSION["user_data"]["user_phone"]; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">
              <div class="mb-3">
                <label for="address" class="col-form-label">Student Code:</label>
                <input type="text" class="form-control" id="code" name="code" value="<?php if(isset($_SESSION["user_data"]["users_code"])) echo $_SESSION["user_data"]["users_code"]; ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="mb-3">
                <label for="address" class="col-form-label">Address:</label>
                <textarea class="form-control" id="address" name="address"><?php if(isset($_SESSION["user_data"]["user_add"])) echo $_SESSION["user_data"]["user_add"]; ?></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">
              <div class="mb-3">
                <label for="password" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
            </div>
            <div class="col-lg">
              <div class="mb-3">
                <label for="repassword" class="col-form-label">Re-Password:</label>
                <input type="password" class="form-control" id="repassword" name="repassword">
              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" id="submit-edit-profile" class="btn btn-primary">Save changes</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    $("#submit-edit-profile").click(function(){

      var prefix = $("#prefix").val();
      var name = $("#name").val();
      var lastname = $("#lastname").val();
      var birthday = $("#birthday").val();
      var phone = $("#phone").val();
      var code = $("#code").val();
      var address = $("#address").val();
      var password = $("#password").val();
      var repassword = $("#repassword").val();
      if(password != repassword){
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Password not match',
        });
        return;
      }
      $.ajax({
        url: "assets/inc/system_editprofile.php",
        type: "POST",
        data: {
          user_id: <?php echo $_SESSION["user_data"]["user_id"]; ?>,
          prefix: prefix,
          name: name,
          lastname: lastname,
          birthday: birthday,
          phone: phone,
          code: code,
          address: address,
          password: password
        },
        success: function(response){
          var data = JSON.parse(response);
          Swal.fire({
            icon: data.status === 'success' ? 'success' : 'error',
            title: data.message,
            showConfirmButton: true
          }).then((result) => {
            if (result.isConfirmed) {
              if (data.status === 'success') {
                location.reload();
              }
            }
          });
        }
      });
    });
  });
</script>