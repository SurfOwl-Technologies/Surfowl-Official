<?php

    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['emailId'];
    $phone = $_POST['contact_no'];
    $message = $_POST['message'];

    // Create the email and send the message
    $to = "care.surfowl@gmail.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.    
    $email_subject = "Website Contact Form";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nFirst Name: $fname\n\nLast Name: $lname\n\nE-Mail ID: $email\n\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: $email \r\n";
    $headers = "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    return true;       

    /* $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['emailId'];
    $phone = $_POST['contact_no'];
    $message = $_POST['message'];
    header('Content-Type: application/json');

    if ($name === ''){
    print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
    exit();
    }
    if ($email === ''){
    print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
    exit();
    } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
    exit();
    }
    }
    if ($subject === ''){
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
    }
    if ($message === ''){
    print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
    exit();
    }

    $content="From: First Name $fname \nLast Name: $lname \nEmail: $email \nPhone: $phone\nMessage: $message";
    $recipient = "care.surfowl@gmail.com";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $content, $mailheader) or die("Error!");
    print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
    exit(); */

?>