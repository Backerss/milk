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


function insertData($conn, $sqlInsert) {
    // Execute the insert query
    if ($conn->query($sqlInsert) === TRUE) {
        // รับ ID ของข้อมูลที่ insert
        return $conn->insert_id;
    } else {
        echo "Error: " . $conn->error;
        return null;
    }
}

function selectData($conn, $sqlSelect) {
    $result = $conn->query($sqlSelect);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return null;
    }
}



?>