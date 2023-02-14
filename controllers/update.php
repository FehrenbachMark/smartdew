<?php
// echo "Hello World";
ob_start();
include '../dbconnect.php';
  if(isset($_POST['data'])){
    echo "Data is set";
    $date = $_POST['date'];
    $id = $_POST['id'];
    $username = $_POST['username'];
    $device_id = $_POST['device_id'];
    $temp = $_POST['temperature'];
    $humidity = $_POST['humidity'];
    $water_level = $_POST['water_level'];
    // echo $date;
    // echo $id;
    // echo $username;
    // echo $device_id;
    // echo $temp;
    // echo $humidity;
    // echo $water_level;


    $sql = "INSERT INTO data (date, id, device_id, username, temp, humidity, water_level) VALUES ('$date', '$id', '$device_id', '$username', '$temp', '$humidity', '$water_level')";

    $result = $conn->query($sql);
    if ($result) {
      header("Location: /?data=success");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}