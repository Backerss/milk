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
            <div class="row">
              <div class="col-sm-12">
                <a class="btn btn-info"href="#">Edit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>