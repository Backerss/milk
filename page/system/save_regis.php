<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "cdte_65_1";
    $conn = new mysqli($localhost, $username, $password, $database);
    $conn->set_charset("utf8");
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }


    $users_prefix = $_POST['user_prefix'];
    $users_name = $_POST['user_name'];
    $users_lastname = $_POST['user_lastname'];
    $users_mail = $_POST['user_mail'];
    $users_password = $_POST['user_password'];
    $users_date = $_POST['user_birthday'];
    $users_sex = $_POST['user_sex'];
    $users_code = $_POST['user_ids'];
    $users_phone = $_POST['user_tel'];
    $users_add = $_POST['user_address'];

    function get_data($conn,$sql){
        $result = $conn->query($sql);
        $all = [];
        while($row = $result->fetch_assoc()) {
       $all[] = $row;
       }
       return $all;
    
    }

    $check_mail = "SELECT users_mail FROM users WHERE users_mail = '$users_mail'";
    $check_mail_result = $conn->query($check_mail);
    if($check_mail_result->num_rows > 0){
        echo "<script>
        alert('มีอีเมลนี้ในระบบแล้ว');
        window.history.back();

      </script>";
      exit();
    }


    $hash_pasword = password_hash($users_password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (users_prefix,
    users_name, users_lastname, users_mail,
    users_password, users_date, users_sex,
    users_code, users_phone, users_add, users_regis) VALUES ('$users_prefix',
    '$users_name', '$users_lastname', '$users_mail',
    '$hash_pasword', '$users_date', '$users_sex',
    '$users_code', '$users_phone', '$users_add', NOW())";

    echo $hash_pasword;


    if($conn->query($sql) === TRUE){
        echo "<script>
        alert('บันทึกข้อมูลเรียบร้อยแล้ว');
      </script>";

    
    }else{
        echo "ควายบันทึกไม่ได้หรอก แบร่ๆๆๆ";
    }





?>