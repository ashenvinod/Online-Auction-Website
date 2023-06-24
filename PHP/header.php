<!DOCTYPE html>
<html>
  <head>
    <title>Online Auction System</title>
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
    <div class="header">
      <div class="head1">
        <div class="logo">
          <img
            src="../images/ezBidderlogo.png"
            alt="logo"
            width="50%"
            height="10%"
          />
        </div>
        <div class="col2">
          <div class="searchbar">
            <form class="search" action="/action_page.php">
              <input type="text" placeholder="Search.." name="search" />
              <button class="searchbtn" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
        <div class="icons">
          <a href="" class="icon-links"><i class="fa-solid fa-heart"></i></a>
          <a href="cart.php" class="icon-links"
            ><i class="fa-solid fa-bag-shopping"></i
          ></a>
          <a href="login.php" class="icon-links"><i class="fa-solid fa-user"></i></a>
        </div>
      </div>
      <div class="head2">
        <div class="navbar">
          <div class="dropdown">
            <button class="dropbtn"><a href="index.php">Home</a></button>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="Electronic.php">Electronic</a></button>
            <div class="dropdown-content">
              <a href="#">Mobile Phones and accessories</a>
              <a href="#">Computers and accessories</a>
              <a href="#">Cameras and accessories</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="fashion.php">Fashion</a></button>
            <div class="dropdown-content">
              <a href="#">Watches</a>
              <a href="#">Jewelry</a>
              <a href="#">Footware</a>
              <a href="#">Women's clothing</a>
              <a href="#">Men's clothing</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="beautyProducts.php">Health & Beauty</a></button>
            <div class="dropdown-content">
              <a href="#">Beauty</a>
              <a href="#">Makeup</a>
              <a href="#">Health</a>
              <a href="#">Hair products</a>
              <a href="#">Skin products</a>
              <a href="#">Oral hygiene</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"><a href="Sport.php">Sport</a></button>
            <div class="dropdown-content">
              <a href="#">Fitness</a>
              <a href="#">Cycling</a>
              <a href="#">Camping</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">More</button>
            <div class="dropdown-content">
              <a href="About.php">About Us</a>
              <a href="contactUs.php">Contact Us</a>
              <a href="addProduct.php">Add Product</a>
              <a href="myAuctions.php">My Auctions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
