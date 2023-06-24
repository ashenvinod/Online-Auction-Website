<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalis page</title>
    <link rel="stylesheet" href="../css/productDetailsStyle.css" class="css">
</head>
<body>
<?php require "header.php" ?>
    <div class="samll-cantainer single-product"></div>
    <div class="row">
        <div class="col-2">
            <img src="../images/img1.jpg" alt="" width="100%" id="product img">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="../images/img1.jpg" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="../images/img2.jpg" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="../images/img3.jpg" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="../images/img4.jpg" alt="" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <p>Home / Boxing Gloves</p>
            
            <h1>Boxing Gloves </h1>
            <hr>
            <h2><b>$25.99</b></h2>
            <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>LARGE</option>
                <option>MEDUIM</option>
                <option>SMALL</option>
            </select>
            <input type="number" value="1">
            <br>
            <a href="" class="btn"><b>Place bid</b></a>
            <br>
            <a href="" class="btn"><b>Bit now</b></a>
            <hr>
            <h3>Product Detalis <i class=" fa fa-indent"></i></h3>
            <br>
            <p> ADIDAS STYLE BOXIND GLOVES EVERLAST MODEL 1010 10 OZ
                <p>High quality sports equipment and all required sporting items and services.</p>
                <br>
            <p><b>Shipping</b> : US $37.95 International Priority Shippingto Sri Lanka via Global Shipping Program</p>
            <br>
            <p><b>Import charges: </b>
                $22.37 (amount confirmed at checkout)</p>
                <br>
                <p><b>Delivery :</b>
                    Estimated between Fri, Jun 3 and Wed, Jun 15
                    Includes international tracking</p>
                    <br>
                    <p><b>Returns:</b>
                    Seller does not accept returns
                    </p>
        </div>
    </div>
    <script>
        var productimg = document.getElementById("productimg");
        var smallimg =document.getElementsByClassName("small-img");

        smallimg[0].onelick=function()
        {
            productimg.src= smallimg[0].src;
        }
        smallimg[1].onelick=function()
        {
            productimg.src= smallimg[1].src;
        }
        smallimg[2].onelick=function()
        {
            productimg.src= smallimg[2].src;
        }
        smallimg[3].onelick=function()
        {
            productimg.src= smallimg[3].src;
        }
        
        
    </script>



<?php require "footer.php" ?>
</body>
</html>