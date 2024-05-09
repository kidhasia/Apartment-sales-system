<?php

require_once '../config/db.php';

$reg_firstname = $_POST["first-name"];
$reg_lastname = $_POST["last-name"];
$reg_email = $_POST["eMail"];
$reg_password = $_POST["passWord"];
$file_name = $reg_firstname . $reg_lastname;

$sql1 = "SELECT user_mail FROM user WHERE user_mail = '$reg_email'";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    echo "<script>alert('This email is already in use');</script>";
} else {
    if ($reg_password !== $_POST["passWord-2"]) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        $sql = "INSERT INTO user (user_first_name, user_last_name, user_mail, user_password, profile_picture) 
                VALUES ('$reg_firstname', '$reg_lastname', '$reg_email', '$reg_password', '$file_name')";

        if ($conn->query($sql)) {
            echo "<script>alert('Registration Successful!');</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

$conn->close();

?>
