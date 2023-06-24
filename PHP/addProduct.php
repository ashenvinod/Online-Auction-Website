<!DOCTYPE html>
<html>
  <head>
    <title>Online Auction System</title>
    <link rel="stylesheet" href="../css/addProductStyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500&display=swap"
      rel="stylesheet"
    />

  </head>
  <body>
    <?php require "header.php" ?>
    <h1>Add Product</h1>
    <form method="post" action="addProductDB.php" class="addProductForm">
      <div class="detail">
        Product Name :
        <input type="text" name="productName" required /> <br />
      </div>

      <div class="detail">
        Product image :
        <input type="file" name="productImage" id="productImage" required />
        <br />
      </div>

      <div class="detail">
        Description :
        <textarea name="description" rows="7" required></textarea> <br />
      </div>

      <div class="detail">
        Starting Price :
        <input type="text" name="startingPrice" required /> <br />
      </div>

      <div class="detail">
        Starting Date :
        <input
          type="date"
          type="date"
          placeholder="dd-mm-yyyy"
          value=""
          min="2022-01-01"
          max="2030-12-31"
          name="startingDate"
          required
        />
        <br />
      </div>

      <div class="detail">
        Ending Date :
        <input type="date" name="endingDate" required /> <br />
      </div>
      <div class="btn">
        <input type="submit" value="Save" class="saveBtn" />
      </div>
    </form>
    <?php require "footer.php" ?>

  </body>
</html>
