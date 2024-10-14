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
                'users_regis' => $hashUser['users_regis']
                
            ];
    
            // เก็บข้อมูลใน session
            $_SESSION['user_data'] = $userData;
            $_SESSION['user_id'] = $hashUser['users_id'];


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