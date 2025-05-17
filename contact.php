<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db_config.php'; // Include DB connection

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Thank you! Your message has been sent.');
                window.location.href = 'homework.php'; // redirect after alert
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href = 'homework.php';
              </script>";
    }

    $conn->close();
}
?>

