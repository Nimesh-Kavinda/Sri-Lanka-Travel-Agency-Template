<?php
if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  // http_response_code(500);
  header("Location: http://dsntravels.com/error.html");
  //echo "error";
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
//echo $name;
//echo $email;
//echo $m_subject;
//echo $message;

$to = "info@dsntravels.com"; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "You have received a new message from your website contact form.\n\n" . "Here are the details:\n\nName: $name\nEmail: $email\nSubject: $m_subject\nMessage: $message";
$header = "From: $email";
//$header .= "Reply-To: $email";	

mail($to, $subject, $body, $header);
header("Location: http://dsntravels.com/contact_thanks.html");
die();
//http_response_code(500);
