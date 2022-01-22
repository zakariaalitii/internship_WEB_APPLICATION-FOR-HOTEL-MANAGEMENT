
<link rel="icon" href="../presontation/img/hLO.jfif">
<link rel="stylesheet" href="../presontation/css/Reservation.css">
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

<table width="100%" border="1">
<tr>
    <th>ID SERVER</th>
    <th>SERVER NAME</th>
    <th>SERVER PRICE</th>
    <th>Create</th>
   
</tr>
<?php
   include "../dao/Employer.inc";
 
  
  //Q6
 
  $donnees =  affiche();
  if (!is_null($donnees)){
  foreach($donnees as $ligne){
     ?> 
      <tr>
      <th><?php echo $ligne["id_Res"] ;?></th>
      <th><?php echo $ligne["nomSer"] ;?></th>
      <th><?php echo $ligne["prixSer"];?></th>
      <th><a href="../presontation/index6.php"><img src="../presontation/img/create.jfif" alt="" width="50px" height="50px"></th>
      </tr>
     
      <?php }}
 ?></table>

</div>
      </main>
    