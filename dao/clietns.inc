<?php
require_once("connexion.php") ;


   function NouveauClient($nomCl,$prenomCl,$teleCl)
   {
           
          global $conn;
          $sql = "INSERT INTO clients(nomCl, prenomCl, teleCl ) VALUES (\"$nomCl\",\"$prenomCl\",\"$teleCl\")";
          $conn->exec($sql);

   }
   function  ExisteClient($id_Res)
  {    
           global $conn;
     $sql = "SELECT * FROM client WHERE id_Res = $id_Res";
     $resultat=$conn->query($sql);
     $donnees = $resultat->fetchAll();
     foreach($donnees as $ligne)
      if($ligne["id_Res"]==$id_Res){
     return 1;
     } 
     return 0; 
  }
   function reservationphp($dateDub,$dateFin,$trifa,$nbr_Chmbere)
   {       global $conn;
          $sql = "INSERT INTO reservation( dateDub, dateFin ,trifa,nbr_Chmbere)
           VALUES (\"$dateDub\",\"$dateFin\",\"$trifa\",\"$nbr_Chmbere\")";
          $conn->exec($sql);

   }
    function services($nomSer,$prixSer)
   {
          global $conn;
          $sql = "INSERT INTO services( nomSer, prixSer) VALUES (\"$nomSer\",\"$prixSer\")";
          $conn->exec($sql);
       

   }

    function affispecials(){
   global $conn ;
   
      $sql="select titre, textt, PRIX_LOC ,PHOTO from offres ";
     $resultat=$conn->query($sql);
   $donnees=$resultat->fetchAll();
   
    return $donnees;
}

 function affichetable(){
   global $conn ;
      $sql="select * from offres";
     $resultat=$conn->query($sql);
   $donnees=$resultat->fetchAll();
   
    return $donnees;
}
 function affichee(){
   global $conn ;
      $sql="select 	id_Res from reservation";
     $resultat=$conn->query($sql);
   $donnees=$resultat->fetchAll();
   
    return $donnees;
}

?>

