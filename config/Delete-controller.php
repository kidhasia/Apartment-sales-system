<?php
require_once '../config/db.php';


$user_message = $_POST["user_message"];


$sql1 = "INSERT INTO message_controller (message) VALUES ('$user_message')";


if ($conn->query($sql1)) {
    echo "<script>alert('Insert Successful!');</script>";
} else {
    echo "Error: " . $conn->error;
}
?>
