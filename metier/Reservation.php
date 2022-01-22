<link rel="stylesheet" href="../presontation/css/ajouter.css">
<link rel="icon" href="../presontation/img/hLO.jfif">
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
<main>
<div class="php">
<?php
   include "../dao/clietns.inc";
  
  
   $b = $_POST['dateDub'];
   $c = $_POST['dateFin'];
   $z = $_POST['trifa'];
   $x = $_POST['nbr_Chmbere'];
   

   reservationphp($b,$c,$z,$x);
  echo(" <h1>Reserve avec succes</h1>");
  ?>
 <nav>  <!--
<a href="../presontation/index.php">Retour au Menu</a>
        -->
</nav>
</div>
      </main>
      