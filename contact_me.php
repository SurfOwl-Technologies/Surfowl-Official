<?php
    // Check for empty fields
    if(empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['emailId']) || empty($_POST['contact_no']) || empty($_POST['message']) ||       !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {

        echo "No arguments Provided!";
        return false;
    }

    $fname = strip_tags(htmlspecialchars($_POST['fName']));
    $lname = strip_tags(htmlspecialchars($_POST['lName']));
    $email_address = strip_tags(htmlspecialchars($_POST['emailId']));
    $phone = strip_tags(htmlspecialchars($_POST['contact_no']));
    $message = strip_tags(htmlspecialchars($_POST['message']));

    $name = $fname + $lname;

    // Create the email and send the message
    $to = 'care.surfowl@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Website Contact Form:  $fname";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nE-Mail ID: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: noreply@surfowl.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";   
    mail($to,$email_subject,$email_body,$headers);
    return true;         
?>
