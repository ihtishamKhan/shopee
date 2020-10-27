<?php

  //require MySQL Connection
  require('database/DBController.php');
  
  //require Product Class
  require('database/Product.php');
  
  //require Cart Class
  require('database/Cart.php');
   
  
  // DBController object
  $db = new DBController();

  // Product object
  $product = new Prodcut($db);
  $product_shuffle = $product->getData();

  // Cart obbject
  $Cart = new Cart($db);
?>

