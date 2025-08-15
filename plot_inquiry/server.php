<?php
$servername = "localhost";
$username = "root"; // XAMPP default
$password = "";
$dbname = "plot_inquiries";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$budget = $_POST['budget'];
$message = $_POST['message'];

// Insert into DB
$sql = "INSERT INTO inquiries (name, email, phone, location, budget, message)
VALUES ('$name', '$email', '$phone', '$location', '$budget', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>Inquiry submitted successfully!</h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
