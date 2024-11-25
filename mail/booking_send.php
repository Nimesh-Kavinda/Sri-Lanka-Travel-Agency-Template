<?php
if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['fromdate']) || empty($_POST['todate']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['fromcountry']) || empty($_POST['tocountry'])) {
 // http_response_code(500);
 header("Location: http://dsntravels.com/booking_error.html");
  //echo "error";
  exit();
  
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$fromdate = strip_tags(htmlspecialchars($_POST['fromdate']));
$todate = strip_tags(htmlspecialchars($_POST['todate']));
$fromcountry = strip_tags(htmlspecialchars($_POST['fromcountry']));
$tocountry = strip_tags(htmlspecialchars($_POST['tocountry']));
$adultno = strip_tags(htmlspecialchars($_POST['adultno']));
$childno = strip_tags(htmlspecialchars($_POST['childno']));
//echo $name;
//echo $email;
//echo $m_subject;
//echo $message;

$to = "info@dsntravels.com"; // Change this email to your //
$subject = "Ticketing Enquiry:  $name";
$body = "Ticket Booking Lead.\n\n"."Here are the details:\n\nName: $name\nEmail: $email\nPhone: $phone\nDuration From: $fromdate To: $todate\nTrip From: $fromcountry To: $tocountry\nNumber of Passengers: $adultno adults and $childno kids";
$header = "From: $email";
//$header .= "Reply-To: $email";	

mail($to, $subject, $body, $header);
header("Location: http://dsntravels.com/booking_thanks.html");
die();
//http_response_code(500);
?>
