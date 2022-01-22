<?php
 require_once("../dao/connexion.php") ;
?>
<!DOCTYPE html>
<html>
 <head>
 <title>HOTEL FES</title>
     <link rel="stylesheet" href="css/ajouterchmber.css">
     <link rel="icon" href="img/hLO.jfif">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
 </head>
<body>
<header>
    <div id="flexi">
        <i id="i1" class="fas fa-hotel"></i>
        <h1 id="h11a" class="fancy">HOTEL FES</h1>
        <!--f594-->
        <script>
            const text=document.querySelector(".fancy");
            const strText =text.textContent;
            const splitText=strText.split("");
            text.textContent ="";
            for(let i=0;i<splitText.length;i++){
                text.innerHTML +="<h3>"+ splitText[i]+"</h3>";
            }
            let char = 0;
            let timer=setInterval(onTick,50);
            function onTick(){
                const h3=text.querySelectorAll('h3')[char];
                h3.classList.add('fade');
                char++;
                if(char== splitText.length){
                    complete();
                    return;
                }
            }
            function complete(){
                clearInterval(timer);
                timer =null;
            };	
          </script>
    </div>
</header>
       
<main >
    <form method="post"  class="formulaire" enctype="multipart/form-data">
    <div class="large">
        <div>
        <h2> Mettre a jour</h2>
         </div>

         <div>
         <input type="submit" class="submit" name="btmod" value="Mettre a jour">
        </div>
        <div class="long">
         <div>
             <h4>Id chamber</h4>
         <i class="fas fa-id-card-alt"></i>
         <input type="number" name="id_offres"class="zonetext" value="<?php echo $_GET['mod'] ?>" readonly>
         </div>

         <div>
             <h4>Entere la Titre du chmber</h4>
         <i class="fas fa-procedures"></i>
         <input type="text" name="titre"class="zonetext" placeholder="entere la Titre ici ..." require >
         </div>

         <div>
             <h4>Entere la text</h4>
         <i class="fas fa-keyboard"></i>
         <input type="text" name="textt"class="zonetext" placeholder="entere la text ici ..." require >
         </div>
         <div>
             <H4>Entere la prix</H4>
         <i class="fas fa-dollar-sign"></i>
         <input type="number" name="PRIX_LOC"class="zonetext" placeholder="entere la prix ici ..." require >
         </div>
         
         <div>
             <h4>Entere la image</h4>
         <i class="fas fa-camera-retro"></i>
         <input type="file" name="PHOTO" placeholder="entere la image ici ..." require >
          </div>
        

        <p><a href="tableaubord.php" class="submit">Tableau de bord</a></p>
          </div>

 </div>
 
 
<?php  
    /*  function modifier($inn,$marque,$prix,$modifier,$image)
      {*/
   
       if(isset($_POST['btmod']))
      {
          global $conn;
          $id_offres=$_POST['id_offres'];
          $titre=$_POST['titre'];
          $textt=$_POST['textt'];
          $PRIX_LOC=$_POST['PRIX_LOC'];
          $image=$_FILES['PHOTO']['tmp_name'];
          $modifier=$_GET['mod'];
          $traget="img/".$_FILES['PHOTO']['name'];
          move_uploaded_file($image,$traget);
          $sql="UPDATE offres SET titre='$titre',textt='$textt',PRIX_LOC='$PRIX_LOC',PHOTO='$traget' WHERE id_offres='$modifier' ";
          $conn->exec($sql);
       }  
?>
</form>
      </main >

</body>
</html>
<?php
?>
<!--

<
   /*if(isset($_POST['btmod']))
   {
       $inn=$_POST['txtInn'];
       $marque=$_POST['txtMarque'];
       $prix=$_POST['txtprx'];
       $modifier=$_GET['mod'];
       $image=$_FILES['txtphoto']['tmp_name'];
       $traget="img/"$_FILES['txtphoto']['name'];
       move_uploaded_file($image,$traget);
       $sql="UPDATE automobile SET MARQUE='$marque',PRIX_LOC='$prix',PHOTO='$traget' WHERE IMM='$modifier' ";
  $resultat=mysqli_query($conn,$sql);
  if($resultat){
      echo "bien";
  }
  else{
echo"non" ;
  }
    }
 ?>*/
