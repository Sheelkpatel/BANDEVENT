<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// DB config
$host = "localhost";
$user = "root";
$pass = "";
$db = "band_event";

// Connect
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}

// Get POSTed JSON
$data = json_decode(file_get_contents("php://input"), true);

$name = $conn->real_escape_string($data["name"]);
$email = $conn->real_escape_string($data["email"]);
$mobile = $conn->real_escape_string($data["mobile"]);
$address = $conn->real_escape_string($data["address"]);
$ticketCount = intval($data["ticketCount"]);
$totalPrice = floatval($data["totalPrice"]);
$eventName = $conn->real_escape_string($data["eventName"]);
$eventPlace = $conn->real_escape_string($data["eventPlace"]);
$payment_id = $conn->real_escape_string($data["razorpay_payment_id"]);

// Save to DB
$sql = "INSERT INTO tickets (name, email, mobile, address, tickets, total_price, event_name, event_place, payment_id)
        VALUES ('$name', '$email', '$mobile', '$address', $ticketCount, $totalPrice, '$eventName', '$eventPlace', '$payment_id')";

if ($conn->query($sql)) {
    // Prepare email content
    $subject = "Your Ticket for $eventName";
    $body = "Hi $name,<br><br>";
    $body .= "Thank you for your purchase!<br>";
    $body .= "<strong>Event:</strong> $eventName<br>";
    $body .= "<strong>Place:</strong> $eventPlace<br>";
    $body .= "<strong>Tickets:</strong> $ticketCount<br>";
    $body .= "<strong>Total Paid:</strong> ₹$totalPrice<br>";
    $body .= "<strong>Payment ID:</strong> $payment_id<br><br>";
    $body .= "Regards,<br>Event Team";

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sheelpatel0710@gmail.com';  // your Gmail
        $mail->Password = 'kwtwqmkyexsrnwhf';          // your App Password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('sheelpatel0710@gmail.com', 'Event Team');
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        echo "Ticket booked and email sent!";
    } catch (Exception $e) {
        echo "Ticket booked but email failed! Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "DB Error: " . $conn->error;
}

$conn->close();
?>
