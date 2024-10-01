<?php

    include '../../data/db.php';
    $response = [];

    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    if($email == "" || $password == ""){
        $response['status'] = 'error';
        $response['message'] = 'กรุณากรอกข้อมูลให้ครบถ้วน';
        echo json_encode($response);
        exit();
    
    }

    $check_hashUser = selectData($conn, "SELECT * FROM users WHERE users_mail = '$email'");
    $hashUser = $check_hashUser->fetch_assoc();

    if($check_hashUser && $check_hashUser->num_rows > 0){
        if(password_verify($password, $hashUser['users_password'])){
            $response['status'] = 'success';
            $response['message'] = 'เข้าสู่ระบบสำเร็จ';
            echo json_encode($response);
            exit();
        }
        else
        {
            $response['status'] = 'error';
            $response['message'] = 'รหัสผ่านไม่ถูกต้อง';
            echo json_encode($response);
            exit();
        }
    }


?>