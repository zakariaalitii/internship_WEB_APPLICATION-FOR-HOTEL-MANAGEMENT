
<?php
   include "../dao/nive.inc";
  
   $a  = $_POST['titre'];
   $b = $_POST['text'];
   $c = $_POST['PRIX_LOC'];
   $z = $_FILES['PHOTO']['tmp_name'];
  /* $traget="images/".$_FILES['PHOTO']['name'];
   move_uploaded_file($z,$traget)*/

  NouveauClient($a,$b,$c,$z);

  ?>
   
