<?php

// check for form submission - if it doesn’t exist then send back to contact form
if (!isset($_POST["save"]) || $_POST["save"] != "contact-form") {
header("Location: index.html#contact"); exit;
}


// get the posted data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// write the email content
$email_content .= "Name: $name\n";
$email_content .= "Email: $email\n";
$email_content .= "Message:\n\n$message";

// send the email
mail ("office@yourcompanydomain.com", "New Contact Message", $email_content);

// send the user back to the form
header("Location: index.html#contact"); exit;

?>
