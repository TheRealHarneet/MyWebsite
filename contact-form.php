<?php
      $message_sent = false; 
      if (isset(userEmail = $_POST['email']) && $_POST['email'] != ''){


        if (filter_var($_POST['name'], FILTER_VALIDATE_EMAIL)){
          // submit the form 
          $userName = $_POST['name'];
          $userEmail = $_POST['email'];
          $messageSubject= $_POST['subject'];
          $message = $_POST['message'];
    
          $to= "harneetchanni.singh@mail.utoronto.ca";
          $body = "";
    
          $body .= "From: ".$userName."\r\n";
          $body .= "Email: ".$userEmail."\r\n";
          $body .= "From: ".$message."\r\n";
    
          //mail($to, $messageSubject, $body);
          $message_sent = true;

        }
        
      }

      

?> 