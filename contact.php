<?php
        
            $message_sent = false;
            if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

             //submit the form
             $name = $_POST['name];
             $visitor_email = $_POST['email'];
             $number = $_POST['email'];
             $message = $POST['message'];
 
             $email = 'zamiusshaanch756@gmail.com';
 
             $subject = 'New Form Submission';
 
             $body =      "User Name: $name.\n".
                          "User Email: $visitor_email. \n".
                          "User Number: $number.\n".
                          "User message: $message. \n";
 
             $to = "zamiusshaanch756@gmail.com";
 
             $headers = "From: email \r\n";
 
             $headers .= "Reply-To: $visitor_email \r\n";
 
            // mail($to,$subject,$body,$headers);
 
             header("Location: index.html");

             $message_sent = true;
        }
            else{
                $invalid_class_name = "form_invalid";
            }
        
       

    }
           

?>