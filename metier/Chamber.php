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
   include "../dao/Employer.inc";
  
   
   $b = $_POST['dscChamber'];
   $c = $_POST['typeChamber'];
   $z = $_POST['prixChamber'];
   $x = $_POST['nbrEetoiles'];
   

   Chamber($b,$c,$z,$x);
  
  ?>
 <nav>  
<a href="../metier/afficheservice.php">affiche les servire</a>

</nav>
</div>
      </main>