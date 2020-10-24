<?php
        
           
            if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

           
             $name = $_POST['name];
             $visitor_email = $_POST['email'];
             $number = $_POST['number'];
             $message = $POST['message'];
 
             $email = 'zamiusshaanch756@gmail.com';
 
             $subject = 'New Form Submission';
 
             $body =      "User Name: $name.\n".
                          "User Email: $visitor_email.\n".
                          "User Number: $number.\n".
                          "User message: $message.\n";
 
             $to = "zamiusshaanch756@gmail.com";
 
             $headers = "From: email \r\n";
 
             $headers .= "Reply-To: $visitor_email \r\n";
 
             
 
             if(mail($to,$subject,$body,$headers)){
                 echo "<h3>Message sent successfully Thank you "." ".$name.",Will be in touch shortly !</h3>";
             }

             else{
                 echo "Oh Sorry!! Something went wrong..";
             }

            
        }
          
         }         
?>