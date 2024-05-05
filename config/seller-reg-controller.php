<?php

require_once '../config/db.php'; 

$reg_firstname = $_POST["first-name"];
$reg_lastname = $_POST["last-name"];
$reg_phone = $_POST["phoneNo"];
$reg_email = $_POST["eMail"];
$reg_password = $_POST["passWord"];
$file_name = $reg_firstname.$reg_lastname;

if ($reg_password !== $confirm_password) {
    echo "<script>alert('Passwords do not match'); window.history.back();</script>";
    exit(); 
}

$sql1="SELECT user_mail FROM user WHERE user_mail='$reg_email' ";
$result=$conn->query($sql1);

if($result->num_rows>0)
{
    echo "<script> alert('This mail is already used')</script>";
}
else{
    $sql= "INSERT INTO user (user_first_name, user_last_name,user_mail, user_password, profile_picture ) VALUES ('$reg_firstname ','$reg_lastname ','$reg_email','$reg_password','$file_name')";


$result = $conn -> query($sql);
if($conn->query($sql))
{
    echo "<script> alert('Insert Successful!')</script>";
    // header('location:#');//Re-direct to home
}
else{
        echo "Error".$conn->error;
    }
    
}


    
if($result){
    echo "Insert Successful!";
}


$conn->close();







?>