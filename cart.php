<?php
  ob_start();
  // include header.php file
  include('header.php');
?>

<?php

  /*  include cart items if it is not empty */
  count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart-notFound.php');
  /*  !include cart items if it is not empty */

  /*  include top sale section */
  count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist-notFound.php');
  /*  !include top sale section */


  /* include new phones */
    include('Template/_new-phones.php');
  /* !include new phones */

?> 

<?php
  // include footer.php file
  include('footer.php');
?>