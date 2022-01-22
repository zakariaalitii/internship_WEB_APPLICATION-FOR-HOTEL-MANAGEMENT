
<!DOCTYPE html>
<html>
<head>
 <title>HOTEL FES</title>
     <link rel="stylesheet" href="css/affichetablee.css">
     <link rel="icon" href="img/hLO.jfif">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
 </head>
<table width="100%" border="1">
<tr>
    <td>id_offres </td>
    <td>titre</td>
    <td>text</td>
    <td>PRIX</td>
    <td>photo</td>
    <td>supprimer</td>
    <td>Modifier</td>
</tr>

<div id="articles"
<?php
   include "../dao/clietns.inc";
  $donnees =  affichetable();
    if (!is_null($donnees)){
    foreach($donnees as $ligne){
       ?> 
        <tr>
        <th><?php echo $ligne["id_offres"] ;?></th>
        <th><?php echo $ligne["titre"] ;?></th>
        <th><?php echo $ligne["textt"];?></th>
        <th><?php echo $ligne["PRIX_LOC"];?></th>
        <th><img width="120px" height="150px" src="<?php echo $ligne["PHOTO"];?>"></th>
        <th><a href="supprime.php?supcar=<?php echo $ligne["id_offres"] ;?>"><img src="img/suprimer.jpg" alt="" width="50px" height="50px"></th>
        <th><a href="modifier.php?mod=<?php echo $ligne["id_offres"] ;?>"><img src="img/modifier.png" alt="" width="50px" height="50px"></th>
        </tr>
       
        <?php }}
?></table>

 </div>