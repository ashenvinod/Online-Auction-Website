<?php
    //Linking the configuration file
      if(isset($_POST['Submit'])){
         $email = $_POST['emailNewsletter'];
      }
      require_once ("newsletterConfig.php");
     
      $sql="INSERT INTO newsletter_email(email) VALUES ('$email')";
      
      if($con->query($sql)){
        // header('Location:index.php');
        echo  "<script>alert('Subscribed successfully')</script>" ;
      }
      else{
        echo "Error:". $con->error;
      }
      require 'index.php';
      $con->close();
      
      ?>