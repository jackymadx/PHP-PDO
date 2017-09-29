<?php

require_once('dbConfig.php');

$sth = $dbconn->prepare("SELECT `id`, `product_name`, `price`, `category` FROM tbl_products");

$sth->execute();

?>

 <table>

      <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Category</th>
      </tr>

   <?php if($sth->rowCount()):

     while($row = $sth->fetch(PDO::FETCH_ASSOC)){ ?>

       <tr>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['product_name']; ?></td>
         <td><?php echo $row['price']; ?></td>
         <td><?php echo $row['category']; ?></td>
       </tr>

     <?php }  ?>

  <?php endif; ?>
   
</table>
