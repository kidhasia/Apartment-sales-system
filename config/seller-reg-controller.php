<?php
require_once '../config/db.php'; 

// Collecting form data from POST request
$reg_firstname = trim($_POST["first-name"]);
$reg_lastname = trim($_POST["last-name"]);
$reg_phone = trim($_POST["phoneNo"]);
$reg_email = trim($_POST["eMail"]);
$reg_password = trim($_POST["passWord"]);
$confirm_password = trim($_POST["passWord2"]);
$file_name = $reg_firstname . $reg_lastname;

// Check if passwords match
if ($reg_password !== $confirm_password) {
    echo "<script>alert('Passwords do not match'); window.history.back();</script>";
    exit(); // Stop further execution if passwords don't match
}

// Check if the email is already in use
$sql_check_email = "SELECT user_mail FROM user WHERE user_mail = ?";
$stmt = $conn->prepare($sql_check_email);
$stmt->bind_param("s", $reg_email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('This email is already used'); window.history.back();</script>";
    exit(); // Stop further execution
}

// Hash the password for security
$hashed_password = password_hash($reg_password, PASSWORD_BCRYPT);

// Insert the new user into the database
$sql_insert_user = "INSERT INTO user (user_first_name, user_last_name, user_mail, user_password, profile_picture) 
                    VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql_insert_user);
$stmt->bind_param("sssss", $reg_firstname, $reg_lastname, $reg_email, $hashed_password, $file_name);

if ($stmt->execute()) {
    echo "<script>alert('Registration Successful!'); window.location = '../login.php';</script>";
} else {
    echo "Error during insertion: " . $stmt->error;
}

// Closing the connection
$conn->close();
?>
