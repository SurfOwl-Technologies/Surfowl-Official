<?php
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['emailId'];
    $phone = $_POST['contact_no'];
    $message = $_POST['message'];
    $planDetail = array();
    $serviceDetail = array();

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

    if(!empty($_POST['plans'])) {
        foreach($_POST['plans'] as $plan) {
            array_push($planDetail, $plan);
        }
    }

    if(!empty($_POST['services'])) {
        foreach($_POST['services'] as $service) {
            array_push($serviceDetail, $service);
        }
    }

    $name = $fname + $lname;

    // Create the email and send the message
    $to = 'care.surfowl@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Website Contact Form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nE-Mail ID: $email_address\n\nPhone: $phone\n\nMessage:\n$message\n\nPlans: \n$planDetail\n\nServices: \n$serviceDetail";
    $headers = "From: noreply@surfowl.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";   
    mail($to,$email_subject,$email_body,$headers);
    return true;         
?>
