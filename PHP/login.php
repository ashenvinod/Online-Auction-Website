<?php
if(isset($_POST["btn"])){
  
    include 'connection.php';

    $username = $_POST['username'];

    $pwd = $_POST['pwd'];
    $stmt="select * from `registration` where `First Name`='$username' and  `Password`='$pwd' ";

    if(mysqli_num_rows($conn->query($stmt))==1){

        //echo "Login successfully";
  
         header("location:index.php");
  
       
  
        }
  
        else{
  
        echo "Error:". $conn->error;
  
        }
        $conn->close();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <title>Online Auction System</title>
	<!--login-->
	<link rel="stylesheet" href="../css/login.css">
    <link href="assets/fonts/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/footerStyles.css" />
	<!--login-->
    <link rel="stylesheet" href="../css/headerStyles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Karla&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/d73b92abd1.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  
<?php
  include 'header.php'
?>


	<!--login-->
    <section>
        <section>
            <h1>Customer Login</h1>
            <form action="" method = "post">
                <div>
                    <div>
                        <i class="far fa-user"></i>
                    </div>

                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">

                    <div>
                        <i class="fas fa-key"></i>
                    </div>

                    <button name ="btn">Log in</button>
                </div>
            </form>

            <a href="">forgot password?</a>
            <a href="RegistrationForm.php">Don't have an account? <span>Register</span></a>
        </section>

        <section>
            <div class="selectionBox">
                <i class="fab fa-facebook-square"></i>
                <span>Login in with Facebook</span>
            </div>

            <div class="selectionBox">
                <img src="assets/images/google.png" alt="googleImage">
                <span>Sign in with Google</span>
            </div>
        </section>
    </section>

<!--footer-->
<?php
  include 'footer.php'
?>
	
  </body>
</html>
