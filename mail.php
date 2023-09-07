<?php


echo "mail ran";


$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$package = htmlspecialchars($_POST["package"]);
$message = htmlspecialchars($_POST["message"]);
$number = htmlspecialchars($_POST["number"]);


// date when submiting the form 
$date  =  date("l jS  F Y  ");


  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "syedmananmohammed@gmail.com"; //email address  receiving  all messages
      $subject = "From: name <$email>";
      $body = "FirstName : $firstname\nLastName : $lastname\nEmail : $email\nPhone Number: $number\nMessage : $message\nPackage : $package\n";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
		

           }
		else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }



  
// $conn = mysqli_connect("localhost", "", "", "") or die("Connection Error: " . mysqli_error($conn));
// mysqli_query($conn, "INSERT INTO form (first_name, last_name, email ,phone , message , date) VALUES ('" . $first_name. "', '" . $last_name. "' ,  '" . $email. "','" . $phone. "','" . $message. "','" . $date. "')");
// $insert_id = mysqli_insert_id($conn);






?>