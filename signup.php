<?php
// Connect to MySQL database
$host = "localhost";
$user = "root";
$password = "";
$database = "bookflight";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sanitize and validate user input
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$repassword = mysqli_real_escape_string($conn, $_POST['repassword']);

// Check if passwords match
if ($password !== $repassword) {
    echo "Passwords do not match";

// Hash the user's password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user information into MySQL database
$sql = "INSERT INTO user_signup (email, password) VALUES ('$email', '$hashed_password')";
if (mysqli_query($conn, $sql)) {
    echo "Sign up successful";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
// Close MySQL connection
mysqli_close($conn);
?>
''