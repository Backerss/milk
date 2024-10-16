<?php
    session_start();
    include '../../../../data/db.php';
    $response = [];

    $prefix = $_POST['prefix'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $code = $_POST['code'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE users SET users_prefix = '$prefix', users_name = '$name', users_lastname = '$lastname', users_date = '$birthday', users_phone = '$phone', users_code = '$code', users_add = '$address', users_password = '$password' WHERE users_id = ".$_POST['user_id'];
    $sql_query = $conn->query($sql);

    if($sql_query){
        $response['status'] = 'success';
        $response['message'] = 'แก้ไขข้อมูลสำเร็จ';
        echo json_encode($response);
        exit();
    }
    else
    {
        $response['status'] = 'error';
        $response['message'] = 'แก้ไขข้อมูลไม่สำเร็จ';
        echo json_encode($response);
        exit();
    }


?>