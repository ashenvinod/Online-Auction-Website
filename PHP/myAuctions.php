
<!DOCTYPE html>
<html>
  <head>
    <title>Online Auction System</title>
    <link rel="stylesheet" href="../css/myAuctionsStyles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <?php require "header.php" ?>
  <?php require 'addProductConfig.php'; ?><?php require 'addProductConfig.php'; ?>
  <h1>My Auctions</h1>
    <center>
      <table>
        <tr>
          <th>Product Name</th>
          <th class="img">Product Image</th>
          <th>Description</th>
          <th>Starting Price</th>
          <th>Starting Date</th>
          <th>Ending Date</th>
        </tr>
    <?php
    $sql ="SELECT * FROM addProduct";
    $result = $con->query($sql);
    if($result->num_rows >0){ 

      while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td><center>".$row["Product_Name"]."</center></td>";
        echo "<td><center><img width='80%' height='80%' src='../images/".$row["Product_Image"]."'/></center></td>";
        echo "<td class='description'>".$row["Description"]."</td>";
        echo "<td><center>$".$row["Starting_Price"]."</center></td>";
        echo "<td><center>".$row["Starting_Date"]."</center></td>";
        echo "<td><center>".$row["Ending_Date"]."</center></td>";
        echo "</tr>";
      }

    } 
    
    else
    {
     echo "No result";
    }
    
    ?> 
      </table>
    </center>
    <?php require "footer.php" ?>
  </body>
 
</html>
