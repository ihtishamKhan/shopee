<?php
  ob_start();
  // include header.php file
  include('header.php');
?>

<?php

  /* include cart template */
    include('Template/_cart-template.php');
  /* !include cart template */


  /* include new phones */
    include('Template/_new-phones.php');
  /* !include new phones */

?> 

<?php
  // include footer.php file
  include('footer.php');
?>