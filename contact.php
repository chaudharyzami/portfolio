<?php
    
    $server = "sql210.epizy.com";
    $username = "epiz_27041566";
    $password = "fO4f76vuPJ6yPd"
    $dbname = "epiz_27041566_zami";
    
    
    $conn = mysqli_connect($server, $username,$password,$dbname);
    
    if(!$conn){
        die("connection Failed:".mysqli_connect_error());
    }
           
            if(isset($_POST['submit'])){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

           
             $name = $_POST['name'];
             $visitor_email = $_POST['email'];
             $number = $_POST['number'];
             $message = $POST['message'];

             if(empty($name) || empty($email) || empty($number) || empty($message)){
                 header('location: index.php?error');
             }

                    else{
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
                            header("location:index.php?success");
                        }
                    }
        }
          
         }         
?>