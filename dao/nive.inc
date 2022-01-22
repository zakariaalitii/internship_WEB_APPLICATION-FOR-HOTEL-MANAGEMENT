
  <?php
require_once("connexion.php") ;
  function NouveauClient($titre ,$text,$PRIX_LOC,$PHOTO)
   {      
          global $conn;
          $sql = "INSERT INTO  offres(titre , text, PRIX_LOC ,PHOTO) VALUES (\"$titre \",\"$text\",\"$PRIX_LOC\",\"$PHOTO\")";
          $conn->exec($sql);

 }


 function Supprime($sup)
   {
      if(isset($_GET['supcar']))
     {  
            global $conn;
            $sup=$_GET['supcar'];
            $sql = "DELETE FROM offres WHERE id_offres='$sup'";
            $conn->exec($sql);
     }  
   }
/*
function modifier($inn,$marque,$prix,$modifier,$image)
   {

    if(isset($_POST['btmod']))
   {
global $conn;
$sql="UPDATE automobile SET MARQUE='$marque',PRIX_LOC='$prix',PHOTO='$image' WHERE IMM='$modifier' ";
$conn->exec($sql);
    }
   }*/
?>

