<?php
include 'db.php';
include 'sidebar';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $sql = "INSERT INTO contact_messages (name, email, subject, message)
          VALUES ('$name', '$email', '$subject', '$message')";

  if (mysqli_query($conn, $sql)) {
    echo "Thank you for contacting us!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>