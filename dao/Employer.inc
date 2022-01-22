<?php
require_once("connexion.php") ;


   function Employer($nomEmp,$prenomEmp,$adrEmp)
   {
           
          global $conn;
          $sql = "INSERT INTO employer(nomEmp, prenomEmp ,adrEmp) VALUES (\"$nomEmp\",\"$prenomEmp\",\"$adrEmp\")";
          $conn->exec($sql);

   }
    function Chamber($dscChamber,$typeChamber,$prixChamber,$nbrEetoiles)
   {
           
          global $conn;
 $sql = "INSERT INTO chamber( dscChamber, typeChamber ,prixChamber,nbrEetoiles) VALUES (\"$dscChamber\",\"$typeChamber\",\"$prixChamber\",\"$nbrEetoiles\")";
          $conn->exec($sql);

   }


   function affiche()
   {
       global $conn ;
       $sql=" SELECT * FROM services ";
       $resultat=$conn->query($sql);
       $donnees=$resultat->fetchAll();
       return $donnees;
   } 
   function afficheRservation()
   {
       global $conn ;
       $sql=" SELECT nomCl,prenomCl	,teleCl,id_Res ,dateDub,dateFin,trifa,nbr_Chmbere FROM reservation,clients where id_Res = id_Cl ";
       $resultat=$conn->query($sql);
       $donnees=$resultat->fetchAll();
       return $donnees;
   } 
  function  RechercheRservation($id_Res)
  {    
       global $conn;
    $sql = "SELECT nomCl,prenomCl	,teleCl,id_Res ,dateDub,dateFin,trifa,nbr_Chmbere FROM reservation,clients WHERE id_Res = $id_Res and  id_Res = id_Cl ";
    $resultat=$conn->query($sql);
    $donnee=$resultat->fetchAll();
    return $donnee;
   
   }

?>
                                                    