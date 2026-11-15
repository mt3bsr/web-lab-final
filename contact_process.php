<?php
include 'db_connect.php';
$name = htmlspecialchars(strip_tags($_POST['name']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$subject = htmlspecialchars(strip_tags($_POST['subject']));
$reply_by = htmlspecialchars(strip_tags($_POST['reply_by']));
$message = htmlspecialchars(strip_tags($_POST['message']));
if (empty($name) || empty($email) || empty($message)) { echo "Please fill in all fields."; }
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { echo "Invalid email format."; }
else {
    $sql = "INSERT INTO messages (name, email, subject, reply_by, message) VALUES ('$name', '$email', '$subject', '$reply_by', '$message')";
    if ($conn->query($sql) === TRUE) { echo "Thank you, $name. Your message has been sent."; }
    else { echo "Error: " . $conn->error; }
}
$conn->close();
?>
<br><br>
<a href="index.php">Back to portfolio</a>
