<?php
// MySQL database connection settings
$host = "localhost";
$user = "root";
$password = "";
$database = "bookflight";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['re_password'];

  // Check if passwords match
  if ($password != $confirm_password) {
    echo "Passwords do not match!";
  } else {
    // Check if email already exists in database
    $sql = "SELECT * FROM user_signup WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "Email already exists!";
    } else {
      // Hash the password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      // Insert new user into database
      $sql = "INSERT INTO user_signup (email, password) VALUES ('$email', '$hashed_password')";
      if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }

  // Close database connection
  $conn->close();
}
?>
