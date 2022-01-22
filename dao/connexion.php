 <?php

// préparation des informations nécessaires 

/*define("DSN","mysql:host=localhost;dbname=hotel"); 
define("USER","root");
define("MDP","MYSQ");*/

define("DSN","mysql:host=sql11.freesqldatabase.com;dbname=sql11442538"); 
define("USER","sql11442538");
define("MDP","SkIFqSWYdt");
 
try {
$conn=new PDO(DSN,USER,MDP);
} catch (Exception $erreur) {
echo "Erreur : "; 
exit();
}
?> 
