<?php
    if(isset($_POST['submit'])) {
        $mailto= "hughespham2002the2nd@yahoo.com"; //my email address
        $name = $_POST['name']; //get viewer name data
        $fromEmail = $_POST['email']; //get viewer email address
        $subject = $_POST['subject']; //get subject from viewer
        $subject2 = "Message sent"; //for viewer confirmation

    // Email body I will receive

        $message = "Viewer name: ". $name . "\n"
        . "Subject: " . $subject . "\n\n"
        . "Viewer Message: " . "\n" . $_POST['message'];
    
    // Message for viewer confirmation

        $message2 = "Dear" . $name . "\n"
        . "Thank you for contacting me. I will get back to you shortly." . "\n\n"
        . "You sumitted the following message: " . "\n" . $_POST['message'] . "\n\n"
        . "Regards" . "\n" . "- Hughes Pham";

    // Email headers

        $headers = "From: " . $fromEmail; // I will receive viewer email
        $headers2 = "From: " . $mailto;   // Viewer will receive email
    
    // PHP mailer function 

        $result1 = mail($mailto, $subject, $message, $headers); // This email will be sent to my email address
        $result2 = mail($fromEmail, $subject2, $message2, $headers2); // This confirmation will be sent to viewer

    // Mailing test

        if ($result1 && $result2){
            $success = "Your message was sent successfully";
        }
        else {
            $failure = "Sorry, your message was not sent. Please try again later";
        }
    }
?>