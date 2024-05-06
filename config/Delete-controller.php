<?php
require_once '../config/db.php'; 

$status = $_POST["status"];
$note = $_POST["notes"];
$id = $_POST["id"];

if (empty($status) || empty($note) || empty($id)) {
    echo "Please input all required fields.";
    exit(); 
}

$sql = "UPDATE `message_controller` SET note = '$note', status = '$status' WHERE  = $id";

if ($conn->query($sql)) {
    echo "Updated successfully!";
} else {
    echo "Not Updated: " . $conn->error;
}

$conn->close();

?>
