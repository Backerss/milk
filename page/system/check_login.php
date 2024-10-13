<?php
    session_start();
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

            $_SESSION['user_id'] = $hashUser['users_id'];
            $_SESSION['user_name'] = $hashUser['users_name'];
            $_SESSION['user_lastname'] = $hashUser['users_lastname'];
            $_SESSION['user_mail'] = $hashUser['users_mail'];


            //set cookie
            setcookie('user_id', $hashUser['users_id'], time() + 3600, '/');
            setcookie('user_name', $hashUser['users_name'], time() + 3600, '/');
            setcookie('user_lastname', $hashUser['users_lastname'], time() + 3600, '/');
            setcookie('user_mail', $hashUser['users_mail'], time() + 3600, '/');
            

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