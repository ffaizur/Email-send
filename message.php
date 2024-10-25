<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $address = htmlspecialchars($_POST['address']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "faizur982@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: Enquiry From Website";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\n\nMessage:\n$message\n\nRegards,\n$name";
      // $sender = "From: $email";
      
      if(mail($receiver, $subject, $body)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>
