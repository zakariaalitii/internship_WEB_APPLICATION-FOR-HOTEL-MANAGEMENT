<?php
 require_once("../dao/connexion.php") ;
?>
<!DOCTYPE html>
<html>
<head>
 <title>HOTEL FES</title>
     <link rel="stylesheet" href="css/affichetablee.css ">
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
 <p>
     <h1>Liste des types de chambres</h1>
 </p>
 <div class="box">
 <p><a href="ajouter.php"><img id="imgb"  src="img/addd.png" alt="" width="50px" height="50px"></a></p>
 <button class="push" ><a href="../presontation/index.php">DESCONNECT</a></button>
</div>
    <?php
include "../metier/afff.php";
?>

</body>
</html>