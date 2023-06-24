<!DOCTYPE html>
<html>
  <head>
    <title>Online Auction System</title>
    <link rel="stylesheet" href="../css/homeStyles.css" />
    <script
      src="https://kit.fontawesome.com/d73b92abd1.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- header -->
    <?php require "header.php" ?>

    <!-- home content -->
    <div class="home">
      <div class="banner">
        <!-- home banner -->
        <h1>All-New Google Products</h1>
        <button class="banButton" onclick="location.href='Electronic.php'">Shop Now</button>
      </div>
      <!-- home icon row -->
      <div class="home-components">
        <div class="home-icon">
          <div class="truck">
            <i class="fa-solid fa-truck-fast"></i>
            <h4>Fastest Delivery</h4>
            <p>Efficiently unleash media</p>
          </div>
          <div class="payment">
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <h4>Secure Payments</h4>
            <p>Podcasting operational</p>
          </div>
          <div class="call">
            <i class="fa-solid fa-headset"></i>
            <h4>Call Center</h4>
            <p>Completely synergize</p>
          </div>
          <div class="track">
            <i class="fa-solid fa-map-location-dot"></i>
            <h4>Order tracking</h4>
            <p>Objectively empowerede</p>
          </div>
        </div>
        <!-- featured auction header -->
        <div class="feature-auction">
          <h1>Featured Auctions</h1>
          <div class="auction-style">
            <div class="line"></div>
            <i class="fa-solid fa-gavel"></i>
            <div class="line"></div>
          </div>
        </div>
        <!-- featured acution products -->
        <!-- first product -->
        <div class="feature-products">
          <div class="feature-product feature-product-1">
            <img src="../images/macbook.jpg" width="90%" height="auto" />
            <h3>Mackbook Air 512GB</h3>
            <hr />
            <p class="current">Current Bid <strong>$876</strong></p>
            <button class="bidButton">Bid</button>
          </div>
          <!-- second product -->
          <div class="feature-product feature-product-2">
            <img src="../images/iphone.jpg" width="90%" height="auto" />
            <h3>Iphone 13 Pro 256GB</h3>
            <hr />
            <p class="current">Current Bid <strong>$680</strong></p>
            <button class="bidButton">Bid</button>
          </div>
          <!-- third product -->
          <div class="feature-product feature-product-4">
            <img src="../images/cream.jpg" width="90%" height="auto" />
            <h3>Goods Hand & Body Lotion</h3>
            <hr />
            <p class="current">Current Bid <strong>$30</strong></p>
            <button class="bidButton">Bid</button>
          </div>
          <!-- fourth product -->
          <div class="feature-product feature-product-5">
            <img src="../images/shoe.jpg" width="90%" height="auto" />
            <h3>MEN'S SHOE- NAVY BLUE</h3>
            <hr />
            <p class="current">Current Bid <strong>$564</strong></p>
            <button class="bidButton">Bid</button>
          </div>
        </div>
        <!-- caterory-row begins -->
        <div class="caterory-row">
          <div class="category">
            <!-- Electronic block -->
            <div class="Electronics">
              <div class="Electronics-details">
                <p class="ElectronicsP">ELECTRONICS</p>
                <button class="ElectronicsButton">
                  <a href="Electronic.php">VIEW MORE</a>
                </button>
              </div>
            </div>
            <!-- Sport block -->
            <div class="Sport">
              <div class="Sport-details">
                <p class="SportP">SPORT</p>
                <button class="SportButton">
                  <a href="Sport.php">VIEW MORE</a>
                </button>
              </div>
            </div>
            <!-- fashion block -->
            <div class="Fashion">
              <div class="Fashion-details">
                <p class="FashionP">FASHION</p>
                <button class="FashionButton">
                  <a href="fashion.php">VIEW MORE</a>
                </button>
              </div>
            </div>
            <!-- health block -->
            <div class="Health">
              <div class="Health-details">
                <p class="HealthP">HEALTH & BEAUTY</p>
                <button class="HealthButton">
                  <a href="beautyProducts.php">VIEW MORE</a>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- products with category -->
        <div class="category-product-row row-1">
          <!-- first row -->
          <div class="category-product">
            <div class="Product-name">
              <h1>Laptops</h1>
              <p>8 products</p>
              <button class=""><a href="">VIEW ALL ITEMS</a></button>
            </div>
            <!-- first product -->
            <div class="product-1 products">
              <img src="../images/dell.jpg" alt="laptop" />
              <div class="product-detail">
                <h1>Dell XPS 13 512GB</h1>
                <br />
                <p>Current Bid : <strong>$360</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- second product -->
            <div class="product-2 products">
              <img src="../images/matebook.jpg" alt="laptop" />
              <div class="product-detail">
                <h1>Huawei Matebook 13</h1>
                <br />
                <p>Current Bid : <strong>$545</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- third product -->
            <div class="product-3 products">
              <img src="../images/vivobook.jpg" alt="laptop" />
              <div class="product-detail">
                <h1>Asus Vivobook 14</h1>
                <br />
                <p>Current Bid : <strong>$236</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- fourth product -->
            <div class="product-4 products">
              <img src="../images/rog.jpg" alt="laptop" />
              <div class="product-detail">
                <h1>Asus ROG Strix Scar 17</h1>
                <br />
                <p>Current Bid : <strong>$1185</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
          </div>
        </div>
        <!-- <br /> -->
        <!-- second row -->
        <div class="category-product-row row-2">
          <div class="category-product">
            <div class="Product-name">
              <h1>Shoes</h1>
              <p>14 products</p>
              <button class=""><a href="">VIEW ALL ITEMS</a></button>
            </div>
            <!-- first product -->
            <div class="product-1 products">
              <img src="../images/nike.png" alt="nike shoe" />
              <div class="product-detail">
                <h1>Nike Air Zoom</h1>
                <br />
                <p>Current Bid : <strong>$120</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- second product -->
            <div class="product-2 products">
              <img src="../images/vans1.jpg" alt="vans shoes" />
              <div class="product-detail">
                <h1>Vans Women's shoes</h1>
                <br />
                <p>Current Bid : <strong>$334</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- third product -->
            <div class="product-3 products">
              <img src="../images/adidas.jpg" alt="adidas shoes" />
              <div class="product-detail">
                <h1>Adidas Eriga 2.0</h1>
                <br />
                <p>Current Bid : <strong>$56</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- fourth product -->
            <div class="product-4 products">
              <img src="../images/puma1.jpg" alt="puma shoes" />
              <div class="product-detail">
                <h1>Puma Sneakers</h1>
                <br />
                <p>Current Bid : <strong>$345</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
          </div>
        </div>
        <!-- third row -->
        <div class="category-product-row row-3">
          <div class="category-product">
            <div class="Product-name">
              <h1>Watches</h1>
              <p>20 products</p>
              <button class=""><a href="">VIEW ALL ITEMS</a></button>
            </div>
            <!-- first product -->
            <div class="product-1 products">
              <img src="../images/patek.png" alt="patek watch" />
              <div class="product-detail">
                <h1>Patek Philippe Grand</h1>
                <br />
                <p>Current Bid : <strong>$4340</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- second product -->
            <div class="product-2 products">
              <img src="../images/rolex.jpg" alt="rolex watch" />
              <div class="product-detail">
                <h1>Rolex Cellini Moonphase</h1>
                <br />
                <p>Current Bid : <strong>$19000</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- third product -->
            <div class="product-3 products">
              <img src="../images/seven.jpg" alt="sevenfriday watch" />
              <div class="product-detail">
                <h1>Seven Friday M-Series</h1>
                <br />
                <p>Current Bid : <strong>$990</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
            <!-- fourth product -->
            <div class="product-4 products">
              <img src="../images/titan.jpg" alt="titan watch" />
              <div class="product-detail">
                <h1>Titan Brown Dial Watch</h1>
                <br />
                <p>Current Bid : <strong>$660</strong></p>
                <button class="bidButton-category-product">Bid</button>
              </div>
            </div>
          </div>
        </div>
        <!-- footer -->
        <?php require "footer.php" ?>
      </div>
    </div>
  </body>
</html>
