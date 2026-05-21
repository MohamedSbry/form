<?php

$conn = new mysqli("localhost", "root", "", "form_db");

if ($conn->connect_error) {
    die("Connection Failed");
}

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$email = $data->email;
$phone = $data->phone;
$message = $data->message;

$sql = "INSERT INTO messages(name,email,phone,message)
VALUES('$name','$email','$phone','$message')";

if ($conn->query($sql)) {

    echo json_encode([
        "message" => "Message Sent"
    ]);

} else {

    echo json_encode([
        "message" => "Error"
    ]);
}

$conn->close();

?>