<?php
require_once("../dao/connexion.php") ;
?>
<!DOCTYPE html>
<html>
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
     <form method="POST" enctype="multipart/form-data">
        <div class="large">
               <div>
               <h1>NEW BEDROOM  </h1>
               </div>
 
                <div>
               
                <input type="submit" name="btmod" value="Valider" id="boutton" >
                </div>

            <div class="long">
                
                <div>
                <h4>Entere la Titre du chmber</h4>
         <i class="fas fa-procedures"></i>
                    <input type="text" required placeholder="entere la Titre ici ..." name="titre">
                </div>

                <div>
                <h4>Entere la text</h4>
         <i class="fas fa-keyboard"></i>
                    <input type="text" required placeholder="entere la text ici ..." name="textt">
                </div>

                <div>
                <H4>Entere la prix</H4>
         <i class="fas fa-dollar-sign"></i>
                    <input type="number" required placeholder="entere la prix ici ..." name="PRIX_LOC">
                </div>

                <div>
                <h4>Entere la image</h4>
         <i class="fas fa-camera-retro"></i>
                    <input type="file" required placeholder="entere la image ici ..." name="PHOTO">
                </div>
                <div>
                <p><a href="tableaubord.php" class="submit">Tableau de bord</a></p>
                </div>
        </div>
           
                
              
             
             <?php  
    /*  function modifier($inn,$marque,$prix,$modifier,$image)
      {*/
   
       if(isset($_POST['btmod']))
      {
          global $conn;
          $a = $_POST['textt'];
          $titre  = $_POST['titre'];
          $PRIX_LOC = $_POST['PRIX_LOC'];
          

          $image=$_FILES['PHOTO']['tmp_name'];
       
          $traget="img/".$_FILES['PHOTO']['name'];
          move_uploaded_file($image,$traget);
          $sql = "INSERT INTO  offres(titre , textt, PRIX_LOC ,PHOTO)
           VALUES (\"$titre \",\"$a\",\"$PRIX_LOC\",\"$traget\")";
          $conn->exec($sql);
       } ?> 
       </form>
       </main > 
</body>
</html>