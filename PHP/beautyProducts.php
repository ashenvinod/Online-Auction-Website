<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <title>Online Auction System</title>
	
  <link rel="stylesheet" href="../css/beautyProducts.css"/>
  <!--footer styles-->
	<link rel="stylesheet" href="../css/footerStyles.css" />
	<!--header styles-->
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
   
<!--header-->
<?php
  include 'header.php'
?>


<!--Beauty Products body content-->
<div class="tab">
  <br>
  <!--cart-->
  <div class="sidebar-cart-container">
    <h2 class="sidebar-heading">
        <i class="fa-solid fa-cart-shopping"></i>&nbsp;&nbsp;Cart Details
    </h2>
      <p class="sidebar-cart-content">No products in the cart</p>
  </div>

    <button class="tablinks" onclick="openCat(event, 'Makeup Products')" id="defaultOpen"><span class="bulletIcon"> >> </span> Makeup Products</button>
    <button class="tablinks" onclick="openCat(event, 'Hair Care & Styling Products')"><span class="bulletIcon"> >> </span> Hair Care & Styling Products</button>
    <button class="tablinks" onclick="openCat(event, 'Medical & Mobility')"><span class="bulletIcon"> >> </span> Medical & Mobility Products</button>
    <button class="tablinks" onclick="openCat(event, 'Oral care')"><span class="bulletIcon"> >> </span> Oral care</button>
  
    <div class="sidebar-tags-container">
          <br>
          <!--Include tags-->
          <h3>Tags</h3>
          <a class="tag-link" href="#">#fashion,</a>
          <a class="tag-link" href="#">#beauty,</a>
          <a class="tag-link" href="#">#clear,</a>
          <a class="tag-link" href="#">#like,</a>
          <a class="tag-link" href="#">#outfit,</a>
          <a class="tag-link" href="#">#colorfull,</a>
    </div>
    
</div>
<div class="countdown-container">
  <p id="countdown-text" class="countdown-text"></p>
</div>
  <!--makeup products-->
  <div id="Makeup Products" class="tabcontent">
    <h3>Makeup Products</h3>
    <section class="cards">
    <div class="gallery">
          <img class="product-img" src="../images/c1.jpg" >
          <p class="desc">Benecos Natural lip Balm</p>
          <p class="price">Current bid:<s> $4.68 </s> $5.93</p>
          <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
    </div>
    <div class="gallery">
          <img class="product-img" src="../images/c2.jpg">
          <p class="desc">Lakme Rose Face Powder</p>
          <p class="price">Current bid:<s> $1.47 </s> $3.37</p>
          <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
    </div>
      
    <div class="gallery">
          <img class="product-img" src="../images/c3.jpg" >  
          <p class="desc">Miss Rose eye palette</p>
          <p class="price">Current bid:<s> $10.17 </s>$11.8</p>
          <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
    </div>
      
    <div class="gallery">
          <img class="product-img" src="../images/c4.jpg" >
          <p class="desc">Maybelline Mascara</p>
          <p class="price">Current bid:<s> $6.99 </s>$8.32</p>
          <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
    </div>
    <div class="gallery">
      <img class="product-img" src="../images/c5.jpg" >
      <p class="desc">MAC fix fluid foundation</p>
      <p class="price">Current bid:<s> $13.62 </s>$14.25</p>
      <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
    </div>
    <div class="gallery">
      <img class="product-img" src="../images/cnew.jpg" >
      <p class="desc">Maybellin Matte lipstick</p>
      <p class="price">Current bid:<s> $1.59 </s>$2.35</p>
      <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
    </div>
    </section>
  </div>

  <!--Hair Care & Styling Products-->
  <div id="Hair Care & Styling Products" class="tabcontent">
    <h3>Hair Care & Styling Products</h3>
    <section class="cards">
      <div class="gallery">
            <img class="product-img" src="../images/c6.jpg" >
            <p class="desc">L'Oreal hair spray</p>
            <p class="price">Current bid:<s> $9.87 </s>$10.52</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      <div class="gallery">
            <img class="product-img" src="../images/c7.jpg">
            <p class="desc">PHILIPS hair iron</p>
            <p class="price">Current bid:<s> $21.98 </s>$25.32</p>

            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div> 
      <div class="gallery">
            <img class="product-img" src="../images/c8.jpg" >  
            <p class="desc">DOVE shampoo</p>
             <p class="price">Current bid:<s> $8.06 </s>$8.69</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div> 
      <div class="gallery">
            <img class="product-img" src="../images/c9.jpg" >
            <p class="desc">VEGA hair curl machine</p>
            <p class="price">Current bid:<s> $66.00</s>$110.00</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      <div class="gallery">
        <img class="product-img" src="../images/c10.jpg" >
        <p class="desc">BELLOSE'hair bleaching</p>
        <p class="price">Current bid:<s> $9.61 </s>$11.18</p>
        <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      <div class="gallery">
        <img class="product-img" src="../images/cnew1.jpg" >
        <p class="desc">hair extensions</p>
        <p class="price">Current bid:<s> $2.38 </s>$5.24</p>
        <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      <div class="gallery">
        <img class="product-img" src="../images/cnew2.jpg" >
        <p class="desc">ampro hair gel for men</p>
        <p class="price">Current bid:<s> $7.48 </s>$7.81</p>
        <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      </section>
  </div>
  
  <!--Medical & Mobility Products-->
  <div id="Medical & Mobility" class="tabcontent">
    <h3>Medical & Mobility Products</h3>
    <section class="cards">
      <div class="gallery">
            <img class="product-img" src="../images/c11.jpg" >
            <p class="desc">glutathione suppliment</p>
            <p class="price">Current bid:<s> $15.36 </s>$16.15</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      <div class="gallery">
            <img class="product-img" src="../images/c12.jpg">
            <p class="desc">collagen gummies</p>
            <p class="price">Current bid:<s> $77.58 </s>$20.10</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      <div class="gallery">
            <img class="product-img" src="../images/c13.jpg" >  
            <p class="desc">cod liver oil</p>
            <p class="price">Current bid:<s> $20.47 </s>$21.36</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
        
      <div class="gallery">
            <img class="product-img" src="../images/c14.jpg" >
            <p class="desc">Protein suppliment</p>
            <p class="price">Current bid:<s> $33.08 </s>$35.69</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      </section>
  </div>
  
  <!--Oral Care-->
  <div id="Oral care" class="tabcontent">
    <h3>Oral care</h3>
    <section class="cards">
      <div class="gallery">
            <img class="product-img" src="../images/c15.jpg" >
            <p class="desc">Electric tooth brush</p>
            <p class="price">Current bid:<s> $4.93 </s>$5.69</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      <div class="gallery">
            <img class="product-img" src="../images/c16.jpg">
            <p class="desc">Fake teeth replacement</p>
            <p class="price">Current bid:<s> $12.99</s>$14.25</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
        
      <div class="gallery">
            <img class="product-img" src="../images/c17.jpg" >  
            <p class="desc">LISTERIN mouth wash</p>
            <p class="price">Current bid:<s> $9.21 </s>$11.29</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
     
      <div class="gallery">
            <img class="product-img" src="../images/c18.jpg" >
            <p class="desc">breath freshner oral spray</p>
            <p class="price">Current bid:<s> $21.36 </s>$23.23</p>
            <button class="card-btn1">add to cart</button>
          <button class="card-btn2">add bid</button>
      </div>
      
      </section>
    
  </div>

<!--side navigation js-->  
<script src="../js/Beauty.js"></script>  

<!--footer-->
<?php require "footer.php" ?>
 
  </body>
 
</html>