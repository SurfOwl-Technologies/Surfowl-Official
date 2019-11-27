<?php

    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['emailId'];
    $phone = $_POST['contact_no'];
    $message = $_POST['message'];

    header('Content-Type: application/json');

    if ($fname === ''){
        print json_encode(array('message' => 'First Name cannot be empty', 'code' => 0));
        exit();
    }

    if ($lname === ''){
        print json_encode(array('message' => 'Last Name cannot be empty', 'code' => 0));
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

    if ($phone === ''){
        print json_encode(array('message' => 'Phone Number cannot be empty', 'code' => 0));
        exit();
    }

    if ($message === ''){
        print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
        exit();
    }

    $name = $fname . $lname;

    // Create the email and send the message
    $to = "care.surfowl@gmail.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.    
    $subject = "Website Contact Form:  $name";
    $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nE-Mail ID: $email\n\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: " . $email; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    mail($to,$subject,$body,$headers);
    return true;        
?>
