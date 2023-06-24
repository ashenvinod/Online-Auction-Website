<!DOCTYPE html>
<html>
  <head>
    <title>Online Auction System</title>
    
	<link rel="stylesheet" href="../css/Registration.CSS">
  <script src="../js/Registration.js"></script>
    
  </head>
  <body>
  <?php require "header.php" ?>
    <div class="regbody">

      <form class="regform" action="Registration.php" method="post">
        
        <h1 class="regh1">REGISTER</h1>
        
        <div class="main-container">
          
          <div class="container">
            <label for="firstName"><b>First Name</b></label>
            <input type="text" placeholder="First Name" name="firstName" id="firstName" required/>
          </div>
          <br/>
          
          <div class="container">
            <label for="lastName"><b>Last Name</b></label>
            <input type="text" placeholder="Last Name" name="lastName" id="lastName" required />
          </div>  
      <br/>

      
      <div class="container">
        <label for="dob"><b>Date of birth</b></label>
        <input type="date" placeholder="" name="dob" id="dob" required />
      </div>
      <br/>
      
      <div class="container">      
        <label for="gender"><b>Gender</b></label>
        <div class="container-gender">
          <input type="radio" name="gender"  value = "M" > Male
          <input type="radio" name="gender"  value = "F" > Female
        </div>
        
      </div>
      
      <br/>
      
      
      <div class="container">
        <label for="email"><b>E-mail</b></label>
        <input type="email" placeholder="E-mail" name="email" id="email" required />
      </div>
      <br/>
      
      <div class="container"> 
        <label for="pwd"><b>Password</b></label>
        <input type="password" placeholder="" name="pwd" id="pwd" required />
      </div>
      <br/>
      
      <div class="container">
        <label for="confirmpwd"><b>Confirm Password</b></label>
        <input type="password" placeholder="" name="confirmpwd" id="confirmpwd" required />
      </div>
      <br/>  
      
      <div class="container"> 
        <label for="address"><b>Address</b></label>
        <textarea class="regTextArea" name="address" rows="8" cols="50" required/></textarea>
      </div>
      <br/> 
      
      <div class="container">
        <label for="city"><b>City</b></label>
        <input type="text" placeholder="" name="city" id="city" required />
      </div>
      <br/>  
      
      <div class="container">  
        <label for="state"><b>State or Province</b></label>
        <input type="text" placeholder="" name="state" id="state" required/>
      </div>
      <br/>
      
      <div class="container">
        <label for="country"><b>Country</b></label>
        <input type="text" placeholder="" name="country" id="country" required/>
      </div>
      <br/> 
      
      <div class="container">
        <label for="contact"><b>Contact Number</b></label>
        <input class="cntrycode" type="number" name="mobile" pattern="[0-9]{10}" placeholder="+94" required>
        <input class="contact" type="phone" name="mobile" pattern="[0-9]{10}" placeholder="" required>
      </div>
      <br/> 
      
      <div class="checkBox">
        <input type="checkbox" class="inputStyle" id="checkBox" onclick="enableButton()">I have agree to these <a class="checkBox" href="file:///F:/New%20folder/htdocs/MLB_WE_01.01_12/Privacy%20Policy.html">terms & privacy</a><br/><br/>
        <input type="checkbox" class="inputStyle" id="checkBox" >Receive Promotion Emails and Newsletter <br/><br/>
      </div>
      <div class="btn">
        <button type="submit" class="registerbtn" name ="submit" id="registerbtn"  >Register</button> 
        
        
        <div class="signin">
          <p>Already have an account? <a class="signin" href="#">Sign in</a>.</p>
        </div>
      </div>
    </div>
  </form>
    </div>
    <?php require "footer.php" ?>
  </body>
</html>
