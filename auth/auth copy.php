<?php
ob_start();
  if(isset($_POST['login'])){
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    // $result = mysqli_query($conn, $query);
    // if(mysqli_num_rows($result) > 0){
    //   $_SESSION['username'] = $username;
    //   header('Location: index.php');
    // }else{
    //   echo "Invalid username or password";
    // }
    //start session with username
    session_start();
    $_SESSION['username'] = $_POST['username'];
    //redirect to index.php
    header('Location: /?logged_in');
  }elseif(isset($_POST['logout'])){
    //destroy session
    session_destroy();
    //redirect to index.php
    header('Location: /?logged_out');
  }else{
    header('Location: /?error');
  }
?>
<?php
ob_start();
session_start();
include 'dbconnect.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string($_POST['password']);


  // replaces ' with html entity
  $username = str_replace("'", "&#39;", $username);

  $sql = "SELECT * FROM users WHERE username = '$username'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

      if ($username && password_verify($password, $row['password'])) {
        echo "Password is correct";
        // echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
        session_start();
        $_SESSION['username'] = $row['username'];
        // $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];

        $_SESSION['device_id'] = $row['device_id'];
        // header('Location: beers.php');

        header('Location: /?logged_in');
      } else {
        echo "Password is incorrect";
        header("Location: /?error=loginFailedIncorrectUsernameOrPassword");
      }
    }
  } else {
    echo "0 results";
    echo "No username or password";
    header("Location: /?error=loginFailedIncorrectUsernameOrPassword");
  }
}
if (isset($_POST['register'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string($_POST['password']);
  $password = password_hash($password, PASSWORD_DEFAULT);

  // replace ' with html entity
  $username = str_replace("'", "&#39;", $username);

  // if the username is already taken, redirect to register.php
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    header("Location: /?error=usernameUnavailable");
  } else {

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("Location: /");
    } else {
      echo "Error:" . $sql . "<br>" . $conn->error;
    }
  }
}
if (isset($_GET['logout'])) {
  session_start();
  session_destroy();
  header("Location: /?logged_out");
}
if (isset($_POST['update'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string($_POST['password']);
  $password = password_hash($password, PASSWORD_DEFAULT);
  $id = $conn->real_escape_string($_POST['id']);

  $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";

  $_SESSION['username'] = $username;
  // $_SESSION['password'] = $password;

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: index.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

$conn->close();
