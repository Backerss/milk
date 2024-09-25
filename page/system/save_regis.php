<?php

    include '../../data/db.php';
    $response = [];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if($firstname == "" || $lastname == "" || $email == "" || $password == ""){
        $response['status'] = 'error';
        $response['message'] = 'กรุณากรอกข้อมูลให้ครบถ้วน';
        echo json_encode($response);
    }

    $check_mail = selectData($conn, "SELECT * FROM users WHERE users_mail = '$email'");

    if ($check_mail && $check_mail->num_rows > 0) {
        $response['status'] = 'error';
        $response['message'] = 'มีอีเมลนี้ในระบบแล้ว';
    } else {
        // ในที่นี้ให้เพิ่มโค้ดสำหรับการ insert ข้อมูลหากต้องการ
        $response['status'] = 'success';
        $response['message'] = 'สมัครสมาชิกสำเร็จ';
    }
    
    // ส่งผลลัพธ์กลับไปในรูปแบบ JSON
    
    echo json_encode($response);
    

    
?>